#!/bin/bash

sudo mkdir /opt/lampp/htdocs/sae23
sudo cp -r ./web/* /opt/lampp/htdocs/sae23

sudo cp ./mqtt-client-script/mqtt-client-scriptV2.service /etc/systemd/system/
sudo systemctl enable mqtt-client-scriptV2
sudo systemctl start mqtt-client-scriptV2