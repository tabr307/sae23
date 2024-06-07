<?php
	// Démarrage de la session
	session_start();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
	   <meta charset="UTF-8" />
	   <title>Identification erron&eacute;e</title>
	   <link rel="stylesheet" type="text/css" href="./styles/smi.css" />
	 </head>

	<body>
		<!-- Affichage entete -->
		<?php 
			$_SESSION = array(); // Réinitialisation du tableau de session
			session_destroy();   // Destruction de la session
			unset($_SESSION);    // Destruction du tableau de session
			include("entete.html");
		?>
		<section>
			<p>
				<br />
				<em><strong>Administration de la base : Acc&egrave;s limit&eacute; aux personnes autoris&eacute;es</strong></em>
				<br />
			</p>
			<br />
			<p class="erreur">Mot de passe non saisi ou erron&eacute; !!!</p>
			<br />
			<hr />
		</section>
		<footer>
			<p><a href="catalogue.php">Retour au catalogue</a></p>
			<p><a href="login_form.php">Retour à l'identification</a></p>
		</footer>
	</body>
</html>
