import paho.mqtt.client as mqtt
import json
import mysql.connector
from datetime import datetime

############################################### CONNEXION & CONFIG PART ############################################## 

# MQTT broker connexion configuration
mqtt_config = {
    'broker': 'mqtt.iut-blagnac.fr',
    'port': 1883,
    'rooms': []
}

# MySQL database configuration
db_config = {
    'user': 'python',
    'password': 'whzjWL5Z65yb8JYp',
    'host': '127.0.0.1',
    'database': 'sae23'
}

############################################### SCRIPT PART ##########################################################

# Update rooms
def rooms_db():
    try:
        cnx = mysql.connector.connect(**db_config)
        cursor = cnx.cursor()
        cursor.execute("SELECT nom_salle FROM salle")
        db_rooms = [room[0] for room in cursor.fetchall()]
        mqtt_config['rooms'] = list(set(db_rooms))

        client.unsubscribe("#")
        on_connect(client, userdata, flags, reason_code, properties)

    except mysql.connector.Error as err:
        print(f"Error: {err}")
    finally:
        cursor.close()
        cnx.close()

# Subscribing to the topics for room in mqtt_config['rooms']:
def on_connect(client, userdata, flags, reason_code, properties):
    print(f"Connected with result code {reason_code}")
    for room in mqtt_config['rooms']:
        topic = f"AM107/by-room/{room}/data"
        client.subscribe(topic)
        print(f"{topic}")

def on_message(client, userdata, msg):
    payload = json.loads(msg.payload.decode())
    timestamp = datetime.now()

    print(f"Message received on topic {msg.topic} at {timestamp.time()} : {payload}")
    sensor_data = payload[0]
    device_info = payload[1]
    
    # Connection to the DB
    cnx = mysql.connector.connect(**db_config)
    cursor = cnx.cursor()

    try:
        # Check if the building already exists
        select_batiment = ("SELECT id_batiment FROM batiment WHERE nom_batiment = %s")
        cursor.execute(select_batiment, (device_info['Building'],))
        result = cursor.fetchone()
        if result:
            id_batiment = result[0]
        else:
            # Insert new building if it doesn't exist
            add_batiment = ("INSERT INTO batiment (nom_batiment) VALUES (%s)")
            cursor.execute(add_batiment, (device_info['Building'],))
            id_batiment = cursor.lastrowid

        # Check if the room already exists
        select_salle = ("SELECT id_salle FROM salle WHERE nom_salle = %s AND id_batiment = %s")
        cursor.execute(select_salle, (device_info['room'], id_batiment))
        result = cursor.fetchone()
        if result:
            id_salle = result[0]
        else:
            # Insert new room if it doesn't exist
            add_salle = ("INSERT INTO salle (nom_salle, id_batiment) VALUES (%s, %s)")
            cursor.execute(add_salle, (device_info['room'], id_batiment))
            id_salle = cursor.lastrowid

        # Check if the sensor already exists
        select_capteur = ("SELECT id_capteur FROM capteur WHERE nom_capteur = %s AND id_salle = %s")
        cursor.execute(select_capteur, (device_info['deviceName'], id_salle))
        result = cursor.fetchone()
        if result:
            id_capteur = result[0]
        else:
            # Insert new sensor if it doesn't exist
            add_capteur = ("INSERT INTO capteur (nom_capteur, id_salle) VALUES (%s, %s)")
            cursor.execute(add_capteur, (device_info['deviceName'], id_salle))
            id_capteur = cursor.lastrowid

        # Insert measurements
        add_mesure = ("INSERT INTO mesures (unite, valeur, heure, date, id_capteur) "
                      "VALUES (%s, %s, %s, %s, %s)")
        metrics = ['pressure', 'temperature', 'humidity', 'co2', 'illumination']
        for metric in metrics:
            cursor.execute(add_mesure, (metric, sensor_data[metric], timestamp.time(), timestamp.date(), id_capteur))
            print(f"Inserted {metric} value: {sensor_data[metric]} for capteur id: {id_capteur}")

        cnx.commit()

        # After each payload it updating rooms from the DB
        rooms_db()

        # After initial discovery loop, update rooms list from DB only
        if 'initial_rooms' in mqtt_config:
            update_rooms_from_db()
            del mqtt_config['initial_rooms']
            # Resubscribe to the new list of rooms
            client.unsubscribe("#")
            on_connect(client, userdata, flags, reason_code)

    except Exception as e:
        print(f"Error processing message: {e}")
        cnx.rollback()
    finally:
        cursor.close()
        cnx.close()

# Call the function initially to populate mqtt_config['rooms']
rooms_db()

mqttc = mqtt.Client(mqtt.CallbackAPIVersion.VERSION2)
mqttc.on_connect = on_connect
mqttc.on_message = on_message

mqttc.connect(mqtt_config['broker'], mqtt_config['port'], 60)
mqttc.loop_forever()
