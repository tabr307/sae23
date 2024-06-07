<?php 
	session_start(); 
	if ($_SESSION["auth"]!=TRUE)
		header("Location:login_error.php");
?>

<!DOCTYPE html>
<!--
Programme: ajoutpiece.php
Description: Insert dans la table Piece la nouvelle pièce
-->
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Ajout de la nouvelle pi&egrave;ce</title>
		<link rel="stylesheet" type="text/css" href="./styles/smi.css" />
	</head>

	<body>
		<section>
			<?php
				include("entete.html");
				/* Accès à la base */
				include ("mysql.php");

				$LibellePiece = $_POST['LibellePiece'];
				$TarifPiece = $_POST['TarifPiece'];
				$CodeType = $_POST['CodeType']; 	
				$requete = "INSERT INTO `Piece` (`LibellePiece`, `TarifPiece`, `CodeType`)
				VALUES('$LibellePiece','$TarifPiece','$CodeType')";
				$resultat = mysqli_query($id_bd, $requete)
					or die("Execution de la requete impossible : $requete");
				mysqli_close($id_bd);

				echo '<div class="ajout">';
				echo "<br /><strong>La pi&egrave;ce suivante a &eacute;t&eacute; ajout&eacute;e au catalogue : </strong><br />";
				echo "<ul>
						<li> Libellé de la pi&egrave;ce : $LibellePiece</li>
						<li> Tarif de la pi&egrave;ce : $TarifPiece &#8364;</li>
						<li> Code du type de la pi&egrave;ce : $CodeType</li>
					  </ul>
					</div>";
			?>
			<hr />
		</section>
		<footer>
			<p><a href="choix_type.php">Ajoutez une autre pi&egrave;ce</a></p>
			<p><a href="catalogue.php">Retour au catalogue</a></p>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
	</body>
</html>

 
