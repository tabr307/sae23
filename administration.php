<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administration</title>
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
                <?php echo "Bienvenue";
                echo $_SESSION['pseudo'];?>
                 <form method="POST" action="login.php" align="center">
                    <input type="radio" name="table" value="table" id="bt_table">
                    <label for="reseau">une table</label>
                    <input type="radio" name="bd" value="bd" id="bt_bd">
                    <label for="reseau">une base de données</label>
                    <input type="radio" name="val" value="val" id="bt_val">
                    <label for="reseau">une valeur</label><br>
                    <input type="submit" value="Soumettre">
                </form>
        
            </section>
        </section>            
            <footer>
                <ul>
                    <li>Département Réseaux et Télécommunications</li>
                    <li>Cazettes, Le Deunff, Muller, Lalue</li>
                    <li>BUT1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>  
          </footer>
    </body>
</html>
