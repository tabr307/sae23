import json
import paho.mqtt.client as mqtt
import mysql.connector
from datetime import datetime

############################################### CONNEXION & CONFIG PART ############################################### 

# MySQL database configuration
db_config = {
    'user': 'rt',
    'password': 'enzolebg',
    'host': '83.113.15.31',
    'database': 'sae23'
}

# MQTT broker configuration
mqtt_config = {
    'broker': 'mqtt.eclipseprojects.io',
    'port': 1883,
    'rooms': ["E209", "E103", "E208"]
}

############################################### SCRIPT PART ############################################### 

# Callback function when the client connects to the MQTT broker
def on_connect(client, userdata, flags, reason_code, properties=None):
    print(f"Connected with result code {reason_code}")
    # Subscribe to each topic for the rooms in the list
    for room in mqtt_config['rooms']:
        topic = f"AM107/by-room/{room}/data"
        client.subscribe(topic)
        print(f"Subscribed to {topic}")

# Callback function when a message is received from the MQTT broker
def on_message(client, userdata, msg):
    print(f"Received message from topic {msg.topic}")
    try:
        payload = json.loads(msg.payload.decode())
        print(f"Payload: {payload}")
        
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
            add_mesure = ("INSERT INTO mesures (date, horaire, valeur, id_capteur) "
                          "VALUES (%s, %s, %s, %s)")
            timestamp = datetime.now()
            metrics = ['pressure', 'temperature', 'humidity', 'co2', 'illumination']
            for metric in metrics:
                cursor.execute(add_mesure, (timestamp.date(), timestamp.time(), sensor_data[metric], id_capteur))
                print(f"Inserted {metric} value: {sensor_data[metric]} for capteur id: {id_capteur}")

            # Commit the transaction
            cnx.commit()
        except Exception as e:
            print(f"Error processing message: {e}")
            cnx.rollback()
        finally:
            cursor.close()
            cnx.close()
    except json.JSONDecodeError:
        print("Failed to decode JSON payload")
    except Exception as e:
        print(f"Error handling message: {e}")

# MQTT client configuration
client = mqtt.Client()
client.on_connect = on_connect
client.on_message = on_message

# Connect to the MQTT broker
client.connect(mqtt_config['broker'], mqtt_config['port'], 60)

# Start processing the MQTT messages
client.loop_forever()