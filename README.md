# SAE 23
## Problématique professionnelle

Le professionnel R&T, au cœur du système d'information de l'entreprise, est amené à développer différentes solutions informatiques : ces solutions peuvent faciliter son travail quotidien (outil pour centraliser les données d'administration du réseau) ou être commandées pour les besoins de ses collaborateurs (annuaire des personnels, partage d'informations, ...).

Ces solutions sont plus larges que le simple traitement des données et visent le développement d'un outil informatique complet partant d'un cahier des charges donné : les solutions incluent la gestion de données structurées (base de données, fichiers de données), les traitements et les éléments d'interaction utilisateurs via une interface conviviale et pratique.

Les résultats peuvent être documentés grâce à des pages Web voire mis à disposition des utilisateurs directement dans des navigateurs Web.  

Le professionnel R&T doit donc mobiliser son expertise en développement informatique pour le compte de son entreprise.


## Descriptif et objectifs de la SAÉ
### Volume horaire

- 17h encadrées : 1C (1h) semaine 21, 3 TP (12h) semaine 20, 22 et 23, 1 TP évaluation en semaine 24
- 12h projet en autonomie : 3 TP (12h) de la semaine 22 à 24

### Situation professionnelle IoT

Exploiter les données provenant de capteurs répartis dans les bâtiments de l’IUT en proposant une interface dédiée.

**Objectif :**
- Deux bâtiments avec chacun un gestionnaire (compte avec login et mot de passe)
- Deux capteurs (type au choix entre température, luminosité, co2,....) par bâtiment
- Dashboard Grafana avec les 4 capteurs
- Conception d’une base de données MySQL
- Site web dynamique hébergé sur un serveur lampp
- Présentation des données et métrique sous forme de tableau

**Cahier des charges : tâches principales**
- Mettre en place une chaîne de traitement via des conteneurs.
- Créer un dashboard Grafana complet.
- Coder un site web dynamique hébergé sur un serveur lampp.
- Coder un script récupérant les données sur le bus MQTT (langage au choix : bash, php, C, python,…).
- Créer et gérer une base de données MySQL.
- Automatiser la chaîne de traitement (scripts dans crontab)

**Contraintes techniques :**
- Environnement : machine virtuelle
- Système d’exploitation : GNU/Linux
- Langages autorisés : HTML5, CSS3, PHP, Javascript, Bash, C, Python.
- Codes documentés (commentaires pertinents dans le code) en anglais
- Publication sur un serveur web dédié (xampp)
- Gestion de version via Git et Github


## Déroulement et évaluation
NB : les informations pouvant évoluées d'ici à la fin du projet, consultez régulièrement cette section. Vous serez bien entendu prévenu en cas de changements.

### Productions
- Diagramme de GANTT
- Codes informatiques commentés en anglais
- Modèle Entité-Association
- Schéma de conception base de données 
- Dashboard Grafana
- Flow Node-RED
- Projet Github
- Démonstration technique à l’oral

## Livrables
- L1 (Semaine 22) : Diagramme de GANTT, schéma conception BD (onglet concepteur sous PhpMyAdmin) (02/06/24 à 18h)
- L2 et L3 (Semaine 23) : flow Node-RED et dashboard Grafana (09/06/24 à 18h)
- L4 (Semaine 24) : Version finale du projet (codes et fichiers), URL projet Github (16/06/24 à 18h)

## Critères d'évaluation
- Gestion de projet (coeff. 1) : régularité du travail, avancement pendant les créneaux prévus dans l’EDT, respect des échéances pour les rendus des livrables, gestion de version mise en place, page gestion de projet sur site web
- Projet (coeff. 2) : fonctionnalités développées, qualité de la documentation, qualité du code, authenticité du code.
- Présentation orale (coeff. 1) : explication claire du travail effectuée, qualité de l’expression, pertinences des réponses aux questions.