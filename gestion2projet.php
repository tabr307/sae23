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



                <h1>Synthèses Personelles du groupe</h1>
                <br>
                
                <h2>Synthèse Personelle d'Hélio LE DEUNFF</h2> 
				<p id="texte">
                Pour ma part j'ai commencé par la création du gantt prévisionnel. En effet, après avoir 
                discuté avec tous les membres du groupe et la révision du cahier des charges, j'ai pu mettre
                au point un Gantt correct est approuvé par l'équipe. 
                Par la suite, nous avons travaillé tous ensemble pour la création de notre base données PHPmyAdmin. 
                Je me suis aussi occupé de la partie "des dockers" avec Mathys. Ici, je me suis principalement occupé de la partie gestion des dockers 
                et de la base de données influxdb. 
                J'ai poursuivi par le début de la création de la page "Gestion de projet" du site web, tandis que Valentin se chargeait de l'habillage
                 et de la mise en page. 
			  Lors de la dernière séance jusqu'à la fin de la saé je me suis occupé de la partie web de la page gestion c'est à dire que j'ai
			   crée la page permettant d'afficher les données selon un formulaire (et ajouter des métriques).
                <br>                          
                Conclusion : Je conclue cette expérience par un message positif car nous avons appris de nombreuses choses durant ces heures de saé,
	         même si je ne suis pas très à l'aise avec le developpement j'ai fait de mon mieux pour aider le groupe. J'aimerai quand même évoquer le fait
				 fait qu'il n'y avait pas assez de crénau de saé à mon goût. 
                </p>

                <br>

                
                <h2>Synthèse Personelle de Mathys CAZETTES</h2>
          		<p class="texte">
				Pour donner mon avis personnel sur cette saé : je trouve que c'est celle que j'ai preferée depuis le début de l'année. 
				Malgré quelques petits pépins, comme par exemple les problèmes de connexion au broker depuis les salles, nous avons pu produire
	 			un travail que je trouve satisfaisant et qui nous ressemble. 
				Pour justifier mes dires, j'ai vraiment apprecié le travail d'équipe dans cette saé, car pour moi c'était la première ou nous étions en
				groupe de 4. Nous avons su correctement nous organiser et communiquer pour synchroniser toutes nos compétances. 
				Pour ce qui est de mon travail lors de ce projet, j'ai comme hélio l'as dit auparavant, commencé par réaliser les dockers nodered, influxdb 
				et grafana. Une fois tout cela terminé et fonctionnel, j'ai rejoint le reste de l'équipe pour continuer la création du site web : j'ai
				pu produire la page consultation et finaliser la page que vous êtes en train de lire. 
				Je conclus donc tout de même positivement sur cette saé, qui nous a apporté beaucoup de connaissances à chaqun, par le partage et la
				 recherche.
				</p>
				<br>
                
                <h2>Synthèse Personelle de Valentin LALUE</h2>
                Cette SAÉ a pour moi été la plus intéressante de l'année de part la quantité de tâches différentes, que ce soit gestion de projet, gestion de BDD ou 
                encore développement web cette SAÉ est très riche et m'a personellement appris beaucoup. Elle m'a également fait découvrir l'outil git/github qui je pense, 
                me servira énormément dans le futur. C'est pour moi la SAÉ qui a également été la mieux organisée ce semestre, cahier des charges clair, dates de rendus claires, 
                mais tout de même avec beaucoup d'ouverture, on peut attaquer le problème comme on le souhaite sans être pour autant livrés a nous même. Ça fait du bien de bénéficier
                d'une telle organisation comparer aux autres SAÉ qui ont été un peu plus compliquées a mettre en place. Nous sommes plutôt satisfaits du travail que nous avons fourni
                et de nous mêmes, c'est pour moi un bilan très positif pour cette SAÉ ! 
				<br>
                <h2>Synthèse Personelle de Enzo MULLER</h2>
				<p class="texte">
				Pendant la SAE23, j'ai d'abord pris en charge la gestion de la base de données. Ensuite, j'ai développé un script Python pour alimenter les
				 différentes tables de la base de données.
				<br>
				Nous avons rencontré plusieurs problèmes majeurs, notamment le réseau de l'IUT qui empêchait l'accès aux divers services nécessaires pour la
				 SAE23 (tel que le Broker MQTT, Node-Red, Graphana, etc...). Cette situation a pénalisé l'ensemble de la promotion et nous a fait perdre un
				 temps précieux. Nous avons du mettre en place des solutions alternatives pour accéder à ces services afin de pouvoir continuer à travailler
				 sur la SAE. J'ai également rencontrés plusieurs problèmes de droits d'accès à la base de données, notamment avec le client qui exigeait une
				 encryption des données alors que le serveur n'était pas configuré pour cela. 
				<br>
				Avec seulement deux semaines pour réaliser ce projet, en parallèle de plusieurs autres projets et évaluations, ces contretemps nous ont
			 considérablement ralentis, nous empêchant d'atteindre un niveau de perfection satisfaisant. 
				<br>
			Malgré ces difficultés, j'ai apprécié cette SAE qui m'a permis, une fois de plus, d'améliorer mes compétences dans différents domaines de l'IoT.
				</p>

                <br>
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
                    <td>Pour pallier ce problème, Mathys a pu héberger notre Machines Virtuelle son PC personnel 
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
          <footer>
            <ul>
              <li>Département Réseaux et Télécommunications</li>
              <li>Cazettes, Le Deunff, Muller, Lalue</li>
              <li>BUT1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>  
          </footer>
      </body>
</html>