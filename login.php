<?php

	session_start();
	$_SESSION["mdp"]=$_REQUEST["mdp"];  // Récupération du mot de passe
	$motdep=$_SESSION["mdp"];
	$_SESSION["pseudo"]=$_REQUEST["pseudo"];  // Récupération du pseudo
	$pseudal=$_SESSION["pseudo"];
	$_SESSION["auth"]=FALSE;

	// Script de vérification du mot de passe d'administration, en utilisant la table Connexion
		/* Accès à la base */
		include ("mysql.php");

		$requete = "SELECT * FROM `administration`";
		$resultat = mysqli_query($id_bd, $requete);
			or die("Execution de la requete impossible : $requete");

		$ligne = mysqli_fetch_row($resultat);
		echo $ligne
		if ($motdep==$ligne[0] AND $pseudal==$ligne[1])
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
 ?>