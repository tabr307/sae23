<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administration</title>
        <link href="../styles/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
    <section class="navbar">
            <a class="active" href="../index.php"><img src="../ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
                <a class="right" href="../gestion2projet.php"> Gestion de Projet</a> 
                <a class="right" href="../consultation.php"> Consultation</a> 
                <a class="right" href="../form.php"> Gestion</a> 
                <a class="right" href="../form.php"> Administration</a>
            </section>
        </section>
        <section class="container">
            <section class="content">
            <?php echo "Bienvenue ";
                echo $_SESSION['pseudo'];?>
                <br><br><br><br>
                <img class="image" src="../ressources/bd.png" alt="bd">
            <form action="admin_bd.php" method="post">
                <fieldset>
                    <legend>Valeurs</legend> <!-- Titre du fieldset -->
                    <p> 
                        <label for="capteur">Sélectionnez la table dans laquelle modifier vos valeurs :</label><br>
                        <select id="capteur" name="capteur">
                            <option value="administration">administration</option>
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
                        <input type="radio" name="suppr" value="suppr" id="suppr" /><label for="suppr">supprimer</label>
                        <input type="radio" name="mod" value="mod" id="mod" /><label for="mod">modifier</label>
                        <input type="radio" name="add" value="add" id="add" /><label for="add">ajouter</label>
                    </p>  
            </fieldset>

            <fieldset>
                    <legend>Tables</legend> <!-- Titre du fieldset -->
                    <p> 
                        <label for="capteur1">Sélectionnez la table :</label><br>
                        <select id="capteur1" name="capteur1">
                            <option value="administration">administration</option>
                            <option value="batiment">batiment</option>
                            <option value="capteur">capteur</option>
                            <option value="mesures">mesures</option>
                            <option value="salle">salle</option>
                        </select><br>
                        <input type="text" id="champ0" name="champ0" size="70" placeholder="Nom de la table a créer"/><br>
                        <input type="text" id="champ1" name="champ1" size="70" placeholder="comment apppeler le premier champ"/><br>
                        <input type="text" id="champ2" name="champ2" size="70" placeholder="champ2"/><br>
                        <input type="text" id="champ3" name="champ3" size="70" placeholder="champ3"/><br>
                        <input type="text" id="champ4" name="champ4" size="70" placeholder="champ4"/><br>
                        <input type="text" id="champ5" name="champ5" size="70" placeholder="champ5"/><br>
                        <input type="text" id="champ6" name="champ6" size="70" placeholder="champ6"/><br>
                        <input type="radio" name="suppr1" value="suppr1" id="suppr1" /><label for="suppr">supprimer la table</label>
                        <input type="radio" name="mod1" value="mod1" id="mod1" /><label for="mod">modifier</label>
                        <input type="radio" name="add1" value="add1" id="add1" /><label for="add">ajouter une table</label>
                    </p>
            </fieldset>
            <fieldset>
                    <legend>Base de données</legend> <!-- Titre du fieldset -->
                    <p> 
                        <input type="radio" name="oui" value="oui" id="oui" /><label for="mod">Supprimer la BD pour de bon </label>
                        <input type="radio" name="non" value="non" id="non" /><label for="add">Ne pas la supprimer</label><br><br>
                        Êtes vous bien sur de votre choix ?  <br>
                        <input type="checkbox" id="validation" name="validation" required />
                        <label for="validation">Oui, je suis sur de mon choix</label><br>
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
