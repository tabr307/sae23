<!DOCTYPE html>
<html>
   <head>
      <title> Gestion de projet</title>
   </head>
   <body>
         <h1> Le GANTT final</h1>
         <img src="ressources/gantt.PNG" alt="gantt">
         <p>Ici, nous observons le Gantt prévisionnel réalisé pour le livrable 1. <br>
            En effet, nous avons essayé de planifier au mieux notre projet afin de ne pas perdre
            du temps ou faire des erreurs inutiles. <br>
            Or, bien que nos prévisions se sont avérées plutôt exactes, nous avons avons été
            obligés de faire quelques changements afin d'optimiser notre avancée et palier aux 
            problèmes rencontrés.
            
         </p>
         <h1>Screen GitHub</h1>
         <p>
            Je vous laisse chosir les bon screen à mettre
            <img src="ressources/github.PNG" alt="gihb">
         </p>
         <h1>Synthèses Personelles du groupe</h1>
         <ul>
         <p>
           <h2>Synthèse Personelle d'Hélio LE DEUNFF</h2> 
           <img src="ressources/helio.png" alt="helio"><br>
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
           <h3>Conclusion :  </h3><br>
           Pour conclure, j'ai essayé d'apporter mon aide de la manière la plus optimisé possible,
           même si je n'ai pas été le plus actif sur la partie github et PHP.


         </p>

         <p>
            <h2>Synthèse Personelle de Mathys CAZETTES</h2>
            <img src="ressources/8155751-1400x933.jpg" alt="mathys">
         </p>

         <p>
            <h2>Synthèse Personelle de Valentin LALUE</h2>
            <img src="ressources/M6_0054095_0380bis-1140x856.jpg" alt="valentin">
         </p>

         <p>
            <h2>Synthèse Personelle de Enzo MULLER</h2>
            <img src=".ressources/images.jfif" alt="enzo">
         </p>

      </ul>
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
          <style>
            table {
              width: 100%;
              border-collapse: collapse;
            }
            
            th, td {
              padding: 8px;
              text-align: left;
              border: 1px solid #ddd;
            }
            </style>
         <h1>Conclusion : Degré de satisfaction du cahier des charges</h1>

          <p> 
            Après une longue et intense discussion autour d'une table ronde, nous, le groupe, 
            sommes arrivées à la conclusion que notre avis sur le cahier des charges était plutôt positif.
            En effet, (arguments)
          </p>
      </body>
</html>