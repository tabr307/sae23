<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion Bat E</title>
        <link href="styles/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
    <section class="navbar">
            <a class="active" href="index.php"><img src="ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
            <a class="right" href="gestion2projet.php"> Gestion de Projet</a> 
            <a class="right" href="consultation.php"> Consultation</a> 
            <a class="right" href="form.php"> Gestion</a> 
            <a class="right" href="form.php"> Administration</a>
            </section>
        </section>
        <section class="container">
            <section class="content">
            <?php echo "Bienvenue au batE ";
                echo $_SESSION['pseudo'];?>
                <br><br><br><br>
            
            <form method="POST" action="batBaction.php" align="center">
              
              <!-- Champ de sélection pour la salle -->
                  <label for="salle RT">Sélectionnez une salle :</label>
                  <select id="salle" name="salle">
                  <option value="E004">Salle E004</option>
                  <option value="E210">Salle E210</option>
                  </select>
          <br><br>
                  <!-- Champ de sélection pour le type de capteur -->
                  <label for="capteur">Sélectionnez un type de capteur :</label>
                  <select id="capteur" name="capteur">
                  <option value="temperature">Température</option>
                  <option value="humidite">Humidité</option>
                  <option value="pression">Pression</option>
                  <option value="luminosite">Luminosité</option>
                  </select>
          <br><br>
  
                  <!-- Champ de sélection pour la plage temporelle -->
                  <label for="plage">Sélectionnez une plage temporelle :</label>
                  <select id="plage" name="plage">
                  <option value="30min">30 min</option>
                  <option value="1h">1 heure</option>
                  <option value="3h">3 heures</option>
                  </select>
          <br><br>
  
                  <button type="submit"> Soumettre </button>
              </form>

        </section>
    </section>
        <aside id="last">
            <hr />
            <p><em> Validation de la page HTML5 - CSS3 </em></p>
            <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Flalue.atwebpages.com%2FTP_R109%2Frwd.html" target="_blank"> 
                <img class= "image-responsive" src="images/html5-validator-badge-blue.png" alt="HTML5 Valide !" />
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
            <a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Flalue.atwebpages.com%2FTP_R109%2Fstyles%2Fstyle2RWD.css" target="_blank">
                <img class= "image-responsive" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
            </a>
          </aside>
            
          <footer>
            <ul>
              <li>Département Réseaux et Télécommunications</li>
              <li>Cazettes, Le Deunff, Muller, Lalue</li>
              <li>BUT1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>  
          </footer>
    </body>
</html>