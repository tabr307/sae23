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
                        <label for="action_admin">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="action_admin" name="action_admin">
                            <option value="add">Ajouter</option>
                            <option value="mod">Modifier</option>
                            <option value="sup">Supprimer</option>
                        </select><br>
                        <input type="text" id="pseudo_admin" name="pseudo_admin" size="70" placeholder="pseudo"/><br>
                        <input type="text" id="mdp_admin" name="mdp_admin" size="70" placeholder="mdp"/><br>
                    </p>  
                </fieldset>
                Avant de continuer, vous devez vérifier ces informations ! <br />
                <input type="checkbox" id="validation" name="validation" required />
                <label for="validation">Oui, j'ai pas relu et j'envoie sans le moindre doute !</label><br>
                <input type="submit" value="Envoyer" align="center"/>
                &nbsp;<input type="reset" value="Cancel" align="center"/><br>
            </form>
            <form action="admin_bd.php" method="post">     
                <fieldset>
                    <legend>Mesures</legend> 
                    <p> 
                        <label for="action_mes">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="action_mes" name="action_mes">
                            <option value="add">Ajouter</option>
                            <option value="mod">Modifier</option>
                            <option value="sup">Supprimer</option>
                        </select><br>
                        <input type="text" id="id_mes" name="id_mes" size="70" placeholder="id_mesure"/><br>
                        <input type="text" id="unit_mes" name="unit_mes" size="70" placeholder="unite"/><br>
                        <input type="text" id="val_mes" name="val_mes" size="70" placeholder="valeur"/><br>
                        <input type="text" id="date_mes" name="date_mes" size="70" placeholder="date"/><br>
                        <input type="text" id="heure_mes" name="heure_mes" size="70" placeholder="heure"/><br>
                        <input type="text" id="idcap_mes" name="idcap_mes" size="70" placeholder="id_capteur"/><br>
                    </p>  
                </fieldset>
                Avant de continuer, vous devez vérifier ces informations ! <br />
                <input type="checkbox" id="validation" name="validation" required />
                <label for="validation">Oui, j'ai pas relu et j'envoie sans le moindre doute !</label><br>
                <input type="submit" value="Envoyer" align="center"/>
                &nbsp;<input type="reset" value="Cancel" align="center"/><br>
            </form>
            <form action="admin_bd.php" method="post">
                <fieldset>
                    <legend>Capteur</legend> 
                    <p> 
                        <label for="action_cap">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="action_cap" name="action_cap">
                            <option value="add">Ajouter</option>
                            <option value="mod">Modifier</option>
                            <option value="sup">Supprimer</option>
                        </select><br>
                        <input type="text" id="id_cap" name="id_cap" size="70" placeholder="id_capteur"/><br>
                        <input type="text" id="nom_cap" name="nom_cap" size="70" placeholder="nom_capteur"/><br>
                        <input type="text" id="idsalle_cap" name="idsalle_cap" size="70" placeholder="id_salle"/><br>
                    </p>  
                </fieldset>
                Avant de continuer, vous devez vérifier ces informations ! <br />
                <input type="checkbox" id="validation" name="validation" required />
                <label for="validation">Oui, j'ai pas relu et j'envoie sans le moindre doute !</label><br>
                <input type="submit" value="Envoyer" align="center"/>
                &nbsp;<input type="reset" value="Cancel" align="center"/><br>
            </form>
            <form action="admin_bd.php" method="post">
                <fieldset>
                    <legend>Salle</legend>
                    <p> 
                        <label for="action_salle">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="action_salle" name="action_salle">
                            <option value="add">Ajouter</option>
                            <option value="mod">Modifier</option>
                            <option value="sup">Supprimer</option>
                        </select><br>
                        <input type="text" id="id_salle" name="id_salle" size="70" placeholder="id_salle"/><br>
                        <input type="text" id="nom_salle" name="nom_salle" size="70" placeholder="nom_salle"/><br>
                        <input type="text" id="idbat_salle" name="idbat_salle" size="70" placeholder="id_batiment"/><br>
                    </p>  
                </fieldset>
                Avant de continuer, vous devez vérifier ces informations ! <br />
                <input type="checkbox" id="validation" name="validation" required />
                <label for="validation">Oui, j'ai pas relu et j'envoie sans le moindre doute !</label><br>
                <input type="submit" value="Envoyer" align="center"/>
                &nbsp;<input type="reset" value="Cancel" align="center"/><br>
            </form>
            <form action="admin_bd.php" method="post">
                <fieldset>
                    <legend>Batiment</legend> 
                    <p> 
                        <label for="action_bat">Sélectionnez les valeurs à ajouter/modifier/supprimer : </label><br>
                        <select id="action_bat" name="action_bat">
                            <option value="add">Ajouter</option>
                            <option value="mod">Modifier</option>
                            <option value="sup">Supprimer</option>
                        </select><br>
                        <input type="text" id="id_bat" name="id_bat" size="70" placeholder="id_batiment"/><br>
                        <input type="text" id="nom_bat" name="nom_bat" size="70" placeholder="nom_batiment"/><br>
                        <input type="text" id="pseudo_bat" name="pseudo_bat" size="70" placeholder="pseudo"/><br>
                        <input type="text" id="mdp_bat" name="mdp_bat" size="70" placeholder="mdp"/><br>
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
