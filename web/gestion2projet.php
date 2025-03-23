<!DOCTYPE html>
<html>
   <head>
        <meta charset="UTF-8">
        <title>Acceuil</title>
        <link href="./styles/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
    <section class="navbar">
            <a class="active" href="index.php"><img src="ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
            <a class="right" href="gestion2projet.php"> Gestion de Projet</a> 
            <a class="right" href="consultation.php"> Consultation</a> 
            <a class="right" href="form.php"> Gestion</a> 
            <a class="right" href="admin/administration.php"> Administration</a>
            </section>
        </section>
        <section class="container">
            <section class="content">
                <h1 id="titre32"> Le GANTT final</h1>
                
                <img class="image"  src="ressources/gantt.PNG" alt="gantt">
                
                <p class="texte">
                Ici, nous observons le Gantt prévisionnel réalisé pour le livrable 1. <br>
                En effet, nous avons essayé de planifier au mieux notre projet afin de ne pas perdre
                du temps. <br>
                Or, bien que nos prévisions se sont avérées plutôt exactes, nous avons avons été
                obligés de faire quelques changements afin d'optimiser notre avancée et palier aux 
                problèmes rencontrés.
                </p>

                <h1>Screen GitHub</h1>
                
                
                <img class="image" src="ressources/github.PNG" alt="gihub">
				<p class="texte">
				Github est un outil très pratique qui nous a permis de pouvoir collaborer plus facilement. <br>
				En effet, il permet de pourvoir chacun travailler sur notre partie du code, et de rester au courant de qui à édité quoi et quand, afin de ne
				pas modifier des anciennes version sans le vouloir.
                </p>
                <h1>Problèmes rencontrés et Solutions proposées</h1>

                <table>
                    <tr>
                    <th>Problèmes Rencontrés</th>
                    <th>Solutions Apportées</th>
                    </tr>
                    <tr>
                    <td>Organisation quant à la répartion des tâches sur le gantt</td>
                    <td>Il a fallu quelques jours pour finaliser la planification des tâches car 
                    nous ne savions pas exactement nous allons travailler individuellement. <br>
                    Après maintes discussions sur le sujet, nous sommes arrivées à un résultat qui plaisait à tous.
                    </td>
                    </tr>
                    <tr>
                    <td>Connexion aux différents outils de la partie docker avec le réseau de l'iut </td>
                    <td>Pour pallier ce problème, *** a pu héberger notre Machines Virtuelle sur son PC personnel 
                    situé chez lui, ainsi, nous avons accès a la Vm sans passer par le réseau de l'iut. <br>
                    Cela nous a grandement aidés quant à l'avancée du projet.
                    </td>
                    </tr>
                    <tr>
                    <td>Liaison de la base de donnée influx db à grafana</td>
                    <td>Après plusieurs tentatives de connexion et de multiples échecs, nous avons compris
                    qu'il fallait rentrer l'ip du docker et non celle de la Vm pour la liaison. <br>
                    Ainsi, nous avons supprimé le conteneur puis nous l'avons recréé, avec cette fois une 
                    ip statique. Le problème a donc été résolu et nous avons pu continuer.
                    </td>
                    </tr>
                </table>
				<br> <br>

                <h1>Conclusion : Degré de satisfaction du cahier des charges</h1>

                <p class="texte"> 
                  Après une longue et intense discussion autour d'une table ronde, nous, le groupe, 
                  sommes arrivées à la conclusion que notre avis sur le cahier des charges était plutôt complet et cohérant.
                  En revanche, nous tenons à noter que plusieurs problèmes généraux sont survenus, notamment le réseau de l'IUT qui ne pouvait pas accéder
				 aux différents services de la SAE23 (tel que MQTT, Node-Red, Graphana, etc...). Cette situation a pénalisé l'ensemble de la promotion
				 et nous a fait perdre un temps précieux. Nous avons du mettre en place des solutions alternatives pour accéder à ces services afin de
				 pouvoir continuer à travailler sur la SAE. Avec seulement deux semaines pour réaliser ce projet, en parallèle de plusieurs autres
				 projets et évaluations, ce contretemps nous a considérablement ralentis, nous empêchant d'atteindre un niveau de perfection satisfaisant.
				 Malgré ces difficultés, nous pouvons dire que nous avons apprécié cette SAE qui nous a permis, une fois de plus, d'améliorer nos
				 compétences dans différents domaines de l'IoT.
                </p>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          
            </section>
        </section>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          
      </body>
</html>
