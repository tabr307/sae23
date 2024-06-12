<?php

	session_start();
	$_SESSION["mdp"]=$_REQUEST["mdp"];  // Récupération du mot de passe
	$motdep=$_SESSION["mdp"];
	$_SESSION["pseudo"]=$_REQUEST["pseudo"];  // Récupération du pseudo
	$pseu=$_SESSION["pseudo"];
	$_SESSION["auth"]=FALSE;

	// Script de vérification du mot de passe d'administration, en utilisant la table Connexion
		/* Accès à la base */
		include ("mysql.php");

		$requete = "SELECT `mdp` FROM `administration`";
		$requete1 = "SELECT `pseudo` FROM `administration`";
		$resultat = mysqli_query($id_bd, $requete, $requete1)
			or die("Execution de la requete impossible : $requete");

		$ligne = mysqli_fetch_row($resultat);
		if ($motdep==$ligne[0] AND $pseu==$ligne[1]){
			$_SESSION["auth"]=TRUE;		
            mysqli_close($id_bd);
			header('Location:administration.php');
		 }
		else{
			$_SESSION = array(); // Réinitialisation du tableau de session
            session_destroy();   // Destruction de la session
            unset($_SESSION);    // Destruction du tableau de session
            mysqli_close($id_bd);
            echo "L'un des champs est éronné";
		 }
 ?>