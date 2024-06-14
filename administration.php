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
            <?php echo "Bienvenue ";
                echo $_SESSION['pseudo'];?>
                <br><br><br><br>
                <img class="image" src="ressources/bd.png" alt="bd">
            <form action="admin_bd.php" method="post">
                <fieldset>
                    <legend>Valeurs</legend> <!-- Titre du fieldset -->
                    <p> 
                        <label for="capteur">Sélectionnez la table dans laquelle modifier vos valeurs :</label><br>
                        <select id="capteur" name="capteur">
                            <option value="admin">administration</option>
                            <option value="batiment">batiment</option>
                            <option value="capteur">capteur</option>
                            <option value="mesures">mesures</option>
                            <option value="salle">salle</option>
                        </select><br>
                        <input type="text" id="ch1" name="ch1" size="70" placeholder="champ1"/><br>
                        <input type="text" id="ch2" name="ch2" size="70" placeholder="champ2"/><br>
                        <input type="text" id="ch3" name="ch3" size="70" placeholder="champ3"/><br>
                        <input type="text" id="ch4" name="ch4" size="70" placeholder="champ4"/><br>
                        <input type="text" id="ch5" name="ch5" size="70" placeholder="champ5"/><br>
                        <input type="text" id="ch6" name="ch6" size="70" placeholder="champ6"/><br>
                        <input type="radio" name="web" value="suppr" id="suppr" /><label for="suppr">supprimer</label>
                        <input type="radio" name="web" value="mod" id="mod" /><label for="mod">modifier</label>
                        <input type="radio" name="web" value="add" id="add" /><label for="add">ajouter</label>
                    </p>  
            </fieldset>

            <fieldset>
                    <legend>Tables</legend> <!-- Titre du fieldset -->
                    <p> 
                        <label for="capteur">Sélectionnez la table :</label><br>
                        <select id="capteur" name="capteur">
                            <option value="admin1">administration</option>
                            <option value="batiment1">batiment</option>
                            <option value="capteur1">capteur</option>
                            <option value="mesures1">mesures</option>
                            <option value="salle1">salle</option>
                        </select><br>
                        <input type="text" id="champ1" name="champ1" size="70" placeholder="comment apppeler le premier champ"/><br>
                        <input type="text" id="champ2" name="champ2" size="70" placeholder="champ2"/><br>
                        <input type="text" id="champ3" name="champ3" size="70" placeholder="champ3"/><br>
                        <input type="text" id="champ4" name="champ4" size="70" placeholder="champ4"/><br>
                        <input type="text" id="champ5" name="champ5" size="70" placeholder="champ5"/><br>
                        <input type="text" id="champ6" name="champ6" size="70" placeholder="champ6"/><br>
                        <input type="radio" name="web" value="suppr" id="suppr" /><label for="suppr">supprimer la table</label>
                        <input type="radio" name="web" value="mod" id="mod" /><label for="mod">modifier</label>
                        <input type="radio" name="web" value="add" id="add" /><label for="add">ajouter une table</label>
                    </p>
            </fieldset>
            Avant de continuer, vous devez vérifier ces informations ! <br />
            <input type="checkbox" id="validation" name="validation" required />
            <label for="validation">Oui, j'ai pas relu et j'envoie sans le moindre doute !</label><br>
            <input type="submit" value="Envoyer" align="center"/>
            &nbsp;<input type="reset" value="Cancel" align="center"/><br>
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
