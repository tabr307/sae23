# SAE23 branch "development-enzo"

## Fichier .service

Les fichiers ".service" permettent d'exécuter le script python en arrière plan et de l'exécuter dès le démarrage de la machine avec "systemctl".

``` # Activer l'exécution du script au démarrage de la machine
sudo systemctl enable mqtt-client-scriptV2.service

# Démarrer l'exécution du script
sudo systemctl start mqtt-client-scriptV2.service ```


## Fichier requirements.txt

Ce fichier contient toutes les librairies à installer que requiert le script python. Il suffit d'exécuter la commande ci-dessous pour installer automatiquement toutes les librairies nécessaires.

``` pip install -r requirements.txt ```