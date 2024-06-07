/<?php
	//session_start();
	//$_SESSION["mdp"]=$_REQUEST["mdp"];  // Récupération du mot de passe
	//$motdep=$_SESSION["mdp"];
	//$_SESSION["auth"]=FALSE;

	// Script de vérification du mot de passe d'administration, en utilisant la table Connexion

	//if(empty($motdep))
	//header("Location:login_error.php");
	//else
    // {
		/* Accès à la base */
		//include ("mysql.php");

		//$requete = "SELECT `mdp` FROM `administration`;";
		//$resultat = mysqli_query($id_bd, $requete)
		//or die("Execution de la requete impossible : $requete");

		//$ligne = mysqli_fetch_row($resultat);
		//if ($motdep==$ligne[0])
		// {
			//$_SESSION["auth"]=TRUE;		
			// mysqli_close($id_bd);
			//echo "<script type='text/javascript'>document.location.replace('choix_type.php');</script>";
			// }
			//else
			// {
				//	$_SESSION = array(); // Réinitialisation du tableau de session
				//  session_destroy();   // Destruction de la session
				//unset($_SESSION);    // Destruction du tableau de session
				// mysqli_close($id_bd);
				// echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";
				//}
				//  } 

session_start();
$_SESSION["mdp"] = $_REQUEST["mdp"];  // Récupération du mot de passe
$_SESSION["pseudo"] = $_REQUEST["pseudo"]
$motdep = $_SESSION["mdp"];
$pseudo = $_SESSION["pseudo"];
$_SESSION["auth"] = FALSE;

// Script de vérification du mot de passe d'administration, en utilisant la table Connexion

if (empty($motdep)) {
    header("Location: login_error.php");
    exit(); // Assurez-vous de terminer le script après la redirection
} else {
    /* Accès à la base */
    include("mysql.php");

    // Utilisation de requête préparée pour éviter les injections SQL
    $requete = "SELECT `mdp` FROM `administration` WHERE `pseudo` = $pseudo"; // Assurez-vous que la colonne `user` existe dans votre table
    if ($stmt = mysqli_prepare($id_bd, $requete)) {
        mysqli_stmt_bind_param($stmt, "s", $username); // Remplacez `$username` par la variable contenant le nom d'utilisateur si nécessaire
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $hashed_password);
        mysqli_stmt_fetch($stmt);

        // Vérification du mot de passe avec `password_verify`
        if (password_verify($motdep, $hashed_password)) {
            $_SESSION["auth"] = TRUE;
            mysqli_stmt_close($stmt);
            mysqli_close($id_bd);
            echo "<script type='text/javascript'>document.location.replace('choix_type.php');</script>";
            exit(); // Assurez-vous de terminer le script après la redirection
        } else {
            // Réinitialisation et destruction de la session en cas d'échec
            $_SESSION = array(); // Réinitialisation du tableau de session
            session_destroy();   // Destruction de la session
            unset($_SESSION);    // Destruction du tableau de session
            mysqli_stmt_close($stmt);
            mysqli_close($id_bd);
            echo "<script type='text/javascript'>document.location.replace('login_error.php');</script>";
            exit(); // Assurez-vous de terminer le script après la redirection
        }
    } else {
        die("Échec de la préparation de la requête : " . mysqli_error($id_bd));
    }
}
?>

