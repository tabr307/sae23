import paho.mqtt.client as mqtt
import json
import time

# Configuration du broker MQTT
BROKER = 'mqtt.iut-blagnac.fr'
PORT = 1883
TIMEOUT = 10

def on_connect(client, userdata, flags, rc):
    if rc == 0:
        print(f"Connected to broker {BROKER} on port {PORT}")
        client.connected_flag = True
    else:
        print(f"Connection failed with result code {rc}")
        client.bad_connection_flag = True

def on_message(client, userdata, msg):
    payload = json.loads(msg.payload.decode())
    print(f"Message received on topic {msg.topic}: {payload}")
    client.payload = payload
    client.disconnect()

def get_mqtt_payload(topic):
    client = mqtt.Client()
    client.connected_flag = False
    client.payload = None

    client.on_connect = on_connect
    client.on_message = on_message

    print(f"Connecting to broker {BROKER} on port {PORT}")
    client.connect(BROKER, PORT, 60)

    client.loop_start()
    start_time = time.time()
    while not client.connected_flag:
        time.sleep(1)
        if time.time() - start_time > TIMEOUT:
            print(f"Connection timeout after {TIMEOUT} seconds")
            break

    if client.connected_flag:
        print(f"Subscribed to topic {topic}")
        client.subscribe(topic)

        start_time = time.time()
        while client.payload is None:
            time.sleep(1)
            if time.time() - start_time > TIMEOUT:
                print(f"No payload received for topic {topic} after {TIMEOUT} seconds")
                break

    client.loop_stop()
    client.disconnect()

    return client.payload

rooms = ["E209", "E103", "E208"]

for room in rooms:
    topic = f"AM107/by-room/{room}/data"
    print(f"Getting payload for topic {topic}")
    payload = get_mqtt_payload(topic)
    if payload is not None:
        print(f"Payload for room {room
