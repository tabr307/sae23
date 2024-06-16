# mqtt-client-script
## Fichier .service

Les fichiers ".service" permettent d'exécuter le script python en arrière plan et de l'exécuter dès le démarrage de la machine avec "systemctl".

```sh 
# Activer l'exécution du script au démarrage de la machine
sudo systemctl enable mqtt-client-scriptV2.service

# Démarrer l'exécution du script
sudo systemctl start mqtt-client-scriptV2.service
```


## Fichier requirements.txt

Ce fichier contient toutes les librairies à installer que requiert le script python. Il suffit d'exécuter la commande ci-dessous pour installer automatiquement toutes les librairies nécessaires.

```sh
pip install -r requirements.txt
```

## Scripts python
### Version 1

La première version récupère les payloads des salles présentent dans la liste "rooms" du dictionnaire "mqtt_config"

### Version 2

La seconde version récupère une première fois les payloads des salles présentent dans la liste "rooms" du dictionnaire "mqtt_config" telle qu'une première boucle de découverte. Dans un second temps, le script va en suite récupérer seulement les payloads des salles présentent dans la DB. Cela évite de récupérer les payloads des salles qui sont potentiellement supprimée.
```