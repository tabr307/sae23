import paho.mqtt.client as mqtt
import mysql.connector
from mysql.connector import errorcode
import json

############################################### CONNEXION PART ############################################### 

# MQTT broker connexion configuration
broker = 'mqtt.iut-blagnac.fr'
port = 1883

# MySQL connexion configuration
db_config = {
    'user': 'rt',
    'password': 'enzolebg',
    # @IP A DEFINIR
    'host': ' ',
    'database': 'sae23'
}

############################################### SCRIPT PART ############################################### 

# Function to get payload from MQTT broker
def get_mqtt_payload(topic):
    def on_connect(client):
        client.subscribe(topic)

    def on_message(client, userdata, msg):
        userdata.append(json.loads(msg.payload.decode()))

    client = mqtt.Client(userdata=[])
    client.on_connect = on_connect
    client.on_message = on_message

    client.connect(broker, port, 60)
    client.loop_start()

    while len(client._userdata) == 0:
        pass  # Wait for a message to be received

    client.loop_stop()
    return client._userdata[0]

# Function to connect to the MySQL database
def connect_to_db(config):
    try:
        connection = mysql.connector.connect(**config)
        return connection
    except mysql.connector.Error as err:
        if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
            print("Something is wrong with your user name or password")
        else:
            print(err)
        return None

# Function to insert measurement values into the "mesures" table
def insert_measurement(connection, id_capteur, valeur):
    cursor = connection.cursor()
    query_insert = ("INSERT INTO mesures (id_capteur, valeur) VALUES (%s, %s)")
    cursor.execute(query_insert, (id_capteur, valeur))
    connection.commit()
    cursor.close()

# Function to get the sensor ID (id_capteur)
def get_id_capteur(connection, nom_capteur, nom_salle):
    cursor = connection.cursor()
    query_id_capteur = ("SELECT capteur.id_capteur FROM capteur "
                        "INNER JOIN salle ON capteur.id_salle = salle.id_salle "
                        "WHERE capteur.nom_capteur = %s AND salle.nom_salle = %s")
    cursor.execute(query_id_capteur, (nom_capteur, nom_salle))
    result = cursor.fetchone()
    cursor.close()
    return result[0] if result else None

# List of rooms to query
rooms = ["E209", "E103", "E208"]

# Connect to the database
connection = connect_to_db(db_config)
if connection:
    for room in rooms:
        payload = get_mqtt_payload(f"AM107/by-room/{room}/data")

        if payload:
            data, device_info = payload
            nom_salle = device_info['room']
            
            # Insert into the "mesure" table for each metric
            for metric, value in data.items():
                nom_capteur = f"{device_info['deviceName']}"
                id_capteur = get_id_capteur(connection, nom_capteur, nom_salle)
                if id_capteur is not None:
                    insert_measurement(connection, id_capteur, value)
                else:
                    print(f"Sensor not found for {nom_capteur} in {nom_salle}")

    # Close the connection to the DB
    connection.close()