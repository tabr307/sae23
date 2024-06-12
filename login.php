<?php
	session_start();

	if (isset($_REQUEST["mdp"])) {
		$_SESSION["mdp"] = $_REQUEST["mdp"];  // Récupération du mot de passe
		$motdep = $_SESSION["mdp"];
		$_SESSION["auth"] = FALSE;
        include ("mysql.php");

		$requete = "SELECT `mdp` FROM `administration`";
		$resultat = mysqli_query($id_bd, $requete)
			or die("Execution de la requete impossible : $requete");

		$ligne = mysqli_fetch_row($resultat);
		if ($motdep==$ligne[0])
		 {
			$_SESSION["auth"]=TRUE;		
            mysqli_close($id_bd);
			header('Location:administration.php');
		 }
		else
		 {
			$_SESSION = array(); // Réinitialisation du tableau de session
            session_destroy();   // Destruction de la session
            unset($_SESSION);    // Destruction du tableau de session
            mysqli_close($id_bd);
            echo "Le mot de passe est errone...";
		 }
		// Le reste du code
	} else {
		// Si le mot de passe n'est pas défini, rediriger ou afficher un message d'erreur
		echo"ça va pas";  // ou toute autre action appropriée
		exit();
	}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset='utf-8'>
    <link href="./styles/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        </section>
        <!-- <form method="POST" action="" align="center">
            <input type="password" name="mdp" autocomplete="off">
            <br><br>
            <input type="submit" name="envoi">
        </form> -->
        <form method="post" action="login.php" align="center">
	        <label for="mdp">Mot de passe:</label>
	        <input type="password" id="mdp" name="mdp">
	        <input type="submit" value="Se connecter">
        </form>

</body>
</html>
