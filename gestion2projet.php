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
            <a class="active" href="index.php"><img src="./ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
            <a class="right" href="gestion2projet.php"> Gestion de Projet</a> 
            <a class="right" href="consultation.php"> Consultation</a> 
            <a class="right" href="gestion.php"> Gestion</a> 
            <a class="right" href="login.php"> Administration</a>
            </section>
        </section>
        <section class="container">
            <section class="content">
                <h1 id="titre32"> Le GANTT final</h1>
                
                <img class=".image"  src="ressources/gantt.PNG" alt="gantt">
                
                <p>
                Ici, nous observons le Gantt prévisionnel réalisé pour le livrable 1. <br>
                En effet, nous avons essayé de planifier au mieux notre projet afin de ne pas perdre
                du temps ou faire des erreurs inutiles. <br>
                Or, bien que nos prévisions se sont avérées plutôt exactes, nous avons avons été
                obligés de faire quelques changements afin d'optimiser notre avancée et palier aux 
                problèmes rencontrés.
                </p>

                <h1>Screen GitHub</h1>
                
                <p>
                Je vous laisse chosir les bon screen à mettre
                <img class=".image" src="ressources/github.PNG" alt="gihb">
                </p>

                <h1>Synthèses Personelles du groupe</h1>
                
                <p>
                <h2>Synthèse Personelle d'Hélio LE DEUNFF</h2> 
                <img class=".image" src="ressources/helio.png" alt="helio">
                Pour ma part j'ai commencé par la création du gantt prévisionnel lors de la première séance. En effet, après avoir 
                discuté avec tous les membres du groupe et la révision du cahier des charges, j'ai pu mettre
                au point un Gantt correcte est approuvé par l'équipe. <br>
                Par la suite, lors de la même séance nous avons travaillé tous ensemble pour la création de notre base donnée PHPmyAdmin. <br>
                Ensuite, je me suis occupé de la partie Docker avec Mathys. Nous avons travaillé ensemble lors
                de la 2ème et 3ème séance. Ici, je me suis principalement occupé de la partie gestion des dockers et de la
                base de données influxdb. <br>
                Pour ce qui est de la 4ème séance, je me suis principalement occupé de la page "Gestion de projet" du site web,
                j'ai avancé la partie informative de la page tandis que Valentin se chargeait de l'habillage et de la mise en page. <br>
                Pour ce qui est de la 5 ème séance ... <br>
                <h3>Conclusion :  </h3>
                Pour conclure, j'ai essayé d'apporter mon aide de la manière la plus optimisé possible,
                même si je n'ai pas été le plus actif sur la partie github et PHP.
                </p>

                

                
                    <h2>Synthèse Personelle de Mathys CAZETTES</h2>
                    <img class=".image" src="ressources/8155751-1400x933.jpg" alt="mathys">
                

                
                    <h2>Synthèse Personelle de Valentin LALUE</h2>
                    <img class=".image" src="ressources/M6_0054095_0380bis-1140x856.jpg" alt="valentin">

                    <h2>Synthèse Personelle de Enzo MULLER</h2>
                    <img class=".image" src=".ressources/images.jfif" alt="enzo">

                
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
                    <tr>
                    <td>Row 4, Data 1</td>
                    <td>Row 4, Data 2</td>
                    </tr>
                    <tr>
                    <td>Row 5, Data 1</td>
                    <td>Row 5, Data 2</td>
                    </tr>
                    <tr>
                    <td>Row 6, Data 1</td>
                    <td>Row 6, Data 2</td>
                    </tr>
                    <tr>
                    <td>Row 7, Data 1</td>
                    <td>Row 7, Data 2</td>
                    </tr>
                </table>
                <h1>Conclusion : Degré de satisfaction du cahier des charges</h1>

                <p> 
                    Après une longue et intense discussion autour d'une table ronde, nous, le groupe, 
                    sommes arrivées à la conclusion que notre avis sur le cahier des charges était plutôt positif.
                    En effet, (arguments)
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