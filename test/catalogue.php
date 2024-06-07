<!DOCTYPE html>
<!--
Programme: Catalogue.php
Description: Affiche une liste des types de pièces offertes à partir de la table Type
-->
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Types de pi&egrave;ces propos&eacute;es</title>
		<link rel="stylesheet" type="text/css" href="./styles/smi.css" />
	</head>

	<body>
		<header>
			<h1>Catalogue des types de pièces disponibles</h1>
			<hr />
		</header>
		<section>
			<!-- Création du formulaire de sélection -->
			<form action="affichepiece.php" method="post" enctype="multipart/form-data">
				<fieldset class="gauche">
					<legend>Type de pi&egrave;ces disponibles</legend>
					<?php
						/* Accès à la base */
						include ("mysql.php");

						/* Sélectionner tous les types de pièces présents dans la table Type */
						$requete = "SELECT * FROM `Type` ORDER BY `CodeType`";
						$resultat = mysqli_query($id_bd, $requete)
							or die("Execution de la requete impossible : $requete");
						mysqli_close($id_bd);

						$i=true ;
						while($ligne=mysqli_fetch_array($resultat))
						 {
							extract($ligne);
							if ($i)
							 {
								echo '<input type="radio" name="interet" value="'.$CodeType.'" id ="'.$CodeType.'" checked="checked" /> ' ;
								echo '<label for="'.$CodeType.'"><strong>'.$CodeType.'</strong></label>';
								echo "&nbsp;&nbsp;$LibelleType&nbsp;&nbsp;";
								echo '<div class="centre"><img src="./images/'.$ImageType.'" alt="'.$ImageType.'"  width="100" height="100" /></div>'; 
								$i=false;
							 }
							else
							 {
								echo '<input type="radio" name="interet" value="'.$CodeType.'" id ="'.$CodeType.'" /> ' ;
								echo '<label for="'.$CodeType.'"><strong>'.$CodeType.'</strong></label>';
								echo "&nbsp;&nbsp;$LibelleType&nbsp;&nbsp;";
								echo '<div class="centre"><img src="./images/'.$ImageType.'" alt="'.$ImageType.'"  width="100" height="100" /></div>'; 
							 }  
						 }
					?>
				</fieldset>
				<div class="valid">
					<input type="submit" value="Faites votre choix" />
				</div>
			</form>
		</section>
	</body>
</html>
