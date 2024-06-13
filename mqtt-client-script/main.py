import paho.mqtt.client as mqtt
import json
import mysql.connector
from datetime import datetime

############################################### CONNEXION & CONFIG PART ############################################### 

# MQTT broker connexion configuration
mqtt_config = {
    'broker': 'mqtt.iut-blagnac.fr',
    'port': 1883,
    'rooms': ["E209"]
}

# MySQL database configuration
db_config = {
    'user': 'python',
    'password': 'passp',
    'host': '83.113.15.31',
    'database': 'sae23'
}

############################################### SCRIPT PART ############################################### 

# for room in mqtt_config['rooms']:
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
    # Extract data from the payload
    sensor_data = payload[0]
    device_info = payload[1]
    
    # Connect to the MySQL database
    cnx = mysql.connector.connect(**db_config)
    cursor = cnx.cursor()

    try:
        # Insert building data if it doesn't exist
        add_batiment = ("INSERT INTO batiment (nom_batiment) VALUES (%s) "
                        "ON DUPLICATE KEY UPDATE id_batiment=LAST_INSERT_ID(id_batiment)")
        cursor.execute(add_batiment, (device_info['Building'],))
        id_batiment = cursor.lastrowid
        
        # Retrieve id_batiment if the building already exists
        if cursor.rowcount == 0:
            select_batiment = ("SELECT id_batiment FROM batiment WHERE nom_batiment = %s")
            cursor.execute(select_batiment, (device_info['Building'],))
            id_batiment = cursor.fetchone()[0]

        # Insert room data if it doesn't exist
        add_salle = ("INSERT INTO salle (nom_salle, id_batiment) VALUES (%s, %s) "
                        "ON DUPLICATE KEY UPDATE id_salle=LAST_INSERT_ID(id_salle)")
        cursor.execute(add_salle, (device_info['room'], id_batiment))
        id_salle = cursor.lastrowid

        # Retrieve id_salle if the room already exists
        if cursor.rowcount == 0:
            select_salle = ("SELECT id_salle FROM salle WHERE nom_salle = %s AND id_batiment = %s")
            cursor.execute(select_salle, (device_info['room'], id_batiment))
            id_salle = cursor.fetchone()[0]

        # Insert sensor data if it doesn't exist
        add_capteur = ("INSERT INTO capteur (nom_capteur, id_salle) VALUES (%s, %s) "
                       "ON DUPLICATE KEY UPDATE id_capteur=LAST_INSERT_ID(id_capteur)")
        cursor.execute(add_capteur, (device_info['deviceName'], id_salle))
        id_capteur = cursor.lastrowid

        # Retrieve id_capteur if the sensor already exists
        if cursor.rowcount == 0:
            select_capteur = ("SELECT id_capteur FROM capteur WHERE nom_capteur = %s AND id_salle = %s")
            cursor.execute(select_capteur, (device_info['deviceName'], id_salle))
            id_capteur = cursor.fetchone()[0]

        # Insert measurements
        add_mesure = ("INSERT INTO mesures (unite, valeur, heure, date, id_capteur) "
                      "VALUES (%s, %s, %s, %s, %s)")
        metrics = ['pressure', 'temperature', 'humidity', 'co2', 'illumination']
        for metric in metrics:
            cursor.execute(add_mesure, (metric, sensor_data[metric], timestamp.time(), timestamp.date(), id_capteur))
            print(f"Inserted {metric} value: {sensor_data[metric]} for capteur id: {id_capteur}")

        # Commit the transaction
        cnx.commit()
    except Exception as e:
        print(f"Error processing message: {e}")
        cnx.rollback()
    finally:
        cursor.close()
        cnx.close()
        client.disconnect()

mqttc = mqtt.Client(mqtt.CallbackAPIVersion.VERSION2)
mqttc.on_connect = on_connect
mqttc.on_message = on_message

mqttc.connect(mqtt_config['broker'], mqtt_config['port'], 60)
mqttc.loop_forever()
