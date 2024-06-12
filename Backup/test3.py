import paho.mqtt.client as mqtt
import json
import time

# MQTT broker connexion configuration
broker = 'mqtt.iut-blagnac.fr'
port = 1883

def get_mqtt_payload(topic):
    global payload

    def on_connect(client, userdata, flags, reason_code, properties):
        print(f"Connected with result code {reason_code}")
        client.subscribe(topic)

    def on_message(client, userdata, msg):
        global payload
        payload = json.loads(msg.payload.decode())
        print(f"Message received on topic {msg.topic}: {payload}")
        client.disconnect()

    mqttc = mqtt.Client(mqtt.CallbackAPIVersion.VERSION2)
    mqttc.on_connect = on_connect
    mqttc.on_message = on_message

    mqttc.connect(broker, port, 60)
    mqttc.loop_forever()
    
    return payload

rooms = ["E209", "E103", "E208"]

# List of rooms to query
for room in rooms:
    topic = f"AM107/by-room/{room}/data"
    payload = get_mqtt_payload(topic)
    print(f"Payload for room {room}: {payload}")