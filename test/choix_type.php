<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<!--
Programme: choix_type.php
Description: Affiche pour sélection la liste des types de pièces proposées, à partir de la table Type
-->
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Création Types de pi&egrave;ces</title>
		<link rel="stylesheet" type="text/css" href="./styles/smi.css" />
	</head>

	<body>
		<?php
			include("entete.html");
		?>
		<section>
			<br />
			<form action="nouvellepiece.php" method="post" enctype="multipart/form-data">
				<fieldset class="gauche">
					<legend>Choisissez le type de pi&egrave;ces que vous désirez ajouter</legend>
					<?php
						/* Accès à la base */
						include ("mysql.php");

						/* Sélection des types de pièces présents dans la table Type */
						$requete = "SELECT * FROM `Type` ORDER BY `CodeType`";
						$resultat = mysqli_query($id_bd, $requete)
							or die("Ex&eacute;cution de la requete impossible");
						mysqli_close($id_bd);

						$i=true;		
						while($ligne=mysqli_fetch_array($resultat))
						 {
							extract($ligne);
							echo "<br />";
							if ($i)
							 {
								echo '<input type="radio" name="type" value="'.$CodeType.'" id ="'.$CodeType.'" checked="checked" /> ' ;
								echo '<label for="'.$CodeType.'"><strong>'.$LibelleType.'</strong></label><br />';
								$i=false;
							 }
							else
							 {
								echo '<input type="radio" name="type" value="'.$CodeType.'" id ="'.$CodeType.'" /> ' ;
								echo '<label for="'.$CodeType.'"><strong>'.$LibelleType.'</strong></label><br />';
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
