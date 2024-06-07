<?php
	// Démarrage de la session
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Administration</title>
		<link rel="stylesheet" type="text/css" href="./styles/smi.css" />
	</head>

	<body>
		<!-- Affichage entete -->
		<?php 
			include("entete.html"); 
		?>
		<section>
			<p>
				<br />
				<em><strong>Administration de la base : Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es</strong></em>
				<br />
			</p>
			<form action="login.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Saissez le mot de passe...</legend>
					<label for="mdp">Mot de passe : </label>
					<input type="password" name="mdp" id="mdp" />
				</fieldset>
				<p>
					<input type="submit" value="Valider" />
				</p>
			</form>
			<hr />
		</section>
		<footer>
			<p><a href="catalogue.php">Retour au catalogue</a></p>
			<p><a href="index.html">Retour à l'accueil</a></p>
		</footer>
	</body>
</html>
