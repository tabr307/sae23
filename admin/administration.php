<!DOCTYPE html>
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
                <a class="right" href="administration.php"> Administration</a>
            </section>
        </section>
        <section class="container">
            <section class="content">
                <img class="image" src="../ressources/bd.png" alt="bd">
            <form action="admin_bd.php" method="post">
                <fieldset>
                    <legend>Administration</legend> <!-- Titre du fieldset -->
                    <p> 
                        <label for="capteur">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="capteur" name="capteur">
                            <option value="administration">Ajouter</option>
                            <option value="batiment">Modifier</option>
                            <option value="capteur">Supprimer</option>
                        </select><br>
                        <input type="text" id="pseudo_admin" name="pseudo_admin" size="70" placeholder="pseudo"/><br>
                        <input type="text" id="mdp_admin" name="mdp_admin" size="70" placeholder="mdp"/><br>
                    </p>  
                </fieldset>

                <!-- <fieldset>
                    <legend>Mesures</legend> 
                    <p> 
                        <label for="capteur">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="capteur" name="capteur">
                            <option value="administration">Ajouter</option>
                            <option value="batiment">Modifier</option>
                            <option value="capteur">Supprimer</option>
                        </select><br>
                        <input type="text" id="ch1" name="ch1" size="70" placeholder="id_mesure"/><br>
                        <input type="text" id="ch2" name="ch2" size="70" placeholder="unite"/><br>
                        <input type="text" id="ch3" name="ch3" size="70" placeholder="valeur"/><br>
                        <input type="text" id="ch4" name="ch4" size="70" placeholder="date"/><br>
                        <input type="text" id="ch5" name="ch5" size="70" placeholder="heure"/><br>
                        <input type="text" id="ch6" name="ch6" size="70" placeholder="id_capteur"/><br>
                    </p>  
                </fieldset>
                <fieldset>
                    <legend>Capteur</legend> 
                    <p> 
                        <label for="capteur">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="capteur" name="capteur">
                            <option value="administration">Ajouter</option>
                            <option value="batiment">Modifier</option>
                            <option value="capteur">Supprimer</option>
                        </select><br>
                        <input type="text" id="ch1" name="ch1" size="70" placeholder="id_capteur"/><br>
                        <input type="text" id="ch2" name="ch2" size="70" placeholder="nom_capteur"/><br>
                        <input type="text" id="ch3" name="ch3" size="70" placeholder="id_salle"/><br>
                    </p>  
                </fieldset>
                <fieldset>
                    <legend>Salle</legend>
                    <p> 
                        <label for="capteur">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="capteur" name="capteur">
                            <option value="administration">Ajouter</option>
                            <option value="batiment">Modifier</option>
                            <option value="capteur">Supprimer</option>
                        </select><br>
                        <input type="text" id="ch1" name="ch1" size="70" placeholder="id_salle"/><br>
                        <input type="text" id="ch2" name="ch2" size="70" placeholder="nom_salle"/><br>
                        <input type="text" id="ch3" name="ch3" size="70" placeholder="id_batiment"/><br>
                    </p>  
                </fieldset>
                <fieldset>
                    <legend>Batiment</legend> 
                    <p> 
                        <label for="capteur">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="capteur" name="capteur">
                            <option value="administration">Ajouter</option>
                            <option value="batiment">Modifier</option>
                            <option value="capteur">Supprimer</option>
                        </select><br>
                        <input type="text" id="ch1" name="ch1" size="70" placeholder="id_batiment"/><br>
                        <input type="text" id="ch2" name="ch2" size="70" placeholder="nom_batiment"/><br>
                        <input type="text" id="ch3" name="ch3" size="70" placeholder="pseudo"/><br>
                        <input type="text" id="ch4" name="ch4" size="70" placeholder="mdp"/><br>
                    </p>  
                </fieldset> -->
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
