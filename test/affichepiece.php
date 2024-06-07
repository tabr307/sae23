<!DOCTYPE html>
<!--
Programme: Affichepiece.php
Description: Affiche la liste des pièces à partir de la table Piece
-->
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Liste des pi&egrave;ces propos&eacute;es</title>
		<link rel="stylesheet" type="text/css" href="./styles/smi.css" />
	</head>

	<body>
		<section>
			<div class="centre">
				<h1>Liste des pi&egrave;ces disponibles</h1>
				<hr />
			</div>
			<?php
				$interet=$_POST['interet'];
				/* Accès à la base */
				include ("mysql.php");

				/* Sélection des pieces en fonction de l'interet */
				$requete = "SELECT * FROM `Piece` WHERE `CodeType`='$interet'";
				$resultat = mysqli_query($id_bd, $requete)
					or die("Execution de la requete impossible : $requete");
				mysqli_close($id_bd);

				/* Affichage de la liste des pièces  */
				echo '<div class="tablo">';
				while($ligne=mysqli_fetch_assoc($resultat))
				 {	
					extract($ligne);
					echo '<ul>';
					echo 	"<li> $CodeType </li>";
					echo 	"<li> $LibellePiece </li>";
					echo 	"<li> $TarifPiece &#8364; </li>";    // Affichage en Euros
					echo '</ul>';
				 }
				echo '</div>';
			?>
			<hr />
		</section>
		<footer>
			<p><a href="catalogue.php">Retour au catalogue</a></p>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
	</body>
</html>
