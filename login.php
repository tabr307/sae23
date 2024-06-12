<?php

	session_start();
	$_SESSION["mdp"]=$_REQUEST["mdp"];  // Récupération du mot de passe
	$motdep=$_SESSION["mdp"];
	$_SESSION["pseudo"]=$_REQUEST["pseudo"];  // Récupération du pseudo
	$pseudal=$_SESSION["pseudo"];
	$_SESSION["auth"]=FALSE;

	include ("mysql.php");

	$requete = "SELECT * FROM `administration`";
	$resultat = mysqli_query($id_bd, $requete)
		or die("Execution de la requete impossible : $requete");	
	$ligne = mysqli_fetch_row($resultat);

	if ($motdep==$ligne[1] AND $pseudal==$ligne[0]){
		$_SESSION["auth"]=TRUE;		
        mysqli_close($id_bd);
		header('Location:administration.php');
		}
	else{
		$requete2 = "SELECT pseudo, mdp, nom_batiment FROM `batiment` WHERE pseudo=$pseudal";
		$resultat2 = mysqli_query($id_bd, $requete2)
		or die("Execution de la requete impossible : $requete2");
		$ligne2 = mysqli_fetch_row($resultat2);
		if($motdep==$ligne2[1] AND $pseudal==$ligne2[0] AND $ligne2[2]=='B'){
			$_SESSION["auth"]=TRUE;		
        	mysqli_close($id_bd);
			header('Location:batimentB.php');
		}elseif($motdep==$ligne2[1] AND $pseudal==$ligne2[0] AND $ligne2[2]=='E'){
		$_SESSION["auth"]=TRUE;		
        mysqli_close($id_bd);
		header('Location:batimentE.php');
	
		}else{
			$_SESSION = array(); // Réinitialisation du tableau de session
            session_destroy();   // Destruction de la session
            unset($_SESSION);    // Destruction du tableau de session
            mysqli_close($id_bd);
            echo "Le couple login/mot de passe est errone...";
		}
	}
 ?>