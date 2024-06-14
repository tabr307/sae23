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
                <form name="inscription" action="mailto:machin@truc.fr?subject=Formulaire_Web" method="post" enctype="text/plain">
    <fieldset>
       <legend>Valeurs</legend> <!-- Titre du fieldset -->
       <p>        <label for="capteur">Sélectionnez un type de  :</label><br>
                  <select id="capteur" name="capteur">
                  <option value="temperature">Température</option>
                  <option value="humidite">Humidité</option>
                  <option value="pression">Pression</option>
                  <option value="luminosite">Luminosité</option>
                  </select><br>
                <input type="url" id="site" name="site" size="70" placeholder="id de valeur"/><br>
                <input type="url" id="site" name="site" size="70" placeholder="valeur à ajouter/modifier"/><br>
                <input type="radio" name="web" value="reseau" id="reseau" /><label for="reseau">supprimer</label>
                <input type="radio" name="web" value="site" id="siteg" /><label for="siteg">modifier</label>
                <input type="radio" name="web" value="fonction" id="fonction" /><label for="fonction">ajouter</label>
        </p>
    </fieldset>
    <br />
    <fieldset>
       <legend>Vos compétences initiales en développement Web</legend> <!-- Titre du fieldset -->
       <p>
 
       </p>
       <p>
           <label for="precisions">Si "Autre", veuillez préciser :</label><br />
           <textarea name="precisions" id="precisions" cols="40" rows="4"></textarea>
       </p>
	   <p>
         <label for="site">Eventuellement - URL d'un site Web que vous avez développé : </label><br />
         <input type="url" id="site" name="site" size="70" />
       </p>
		<label for="niveau">Niveau de qualification : </label>
		<select id="niveau" name="niveau">
			<option value="Néophyte" selected="selected">Néophyte</option>
			<option value="Débutant">Débutant</option>
			<option value="Confirmé">Confirmé</option>
			<option value="Expert">Expert</option>
		</select>
    </fieldset>
	<p>
      Avant de continuer, vous devez vérifier ces informations ! <br />
      <input type="checkbox" id="validation" name="validation" required />
      <label for="validation">Oui, j'ai pas relu et j'envoie sans le moindre doute !</label>
	</p>  
    <p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Envoyer" />
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Effacer" />
    </p>
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
