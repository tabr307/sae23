<?php
	session_start();//initializing the session
	$_SESSION["mdp"]=$_REQUEST["mdp"];  // getting the password entered by the user in the form
	$motdep=$_SESSION["mdp"]; //affect the value of the password to the motdep variable
	$_SESSION["pseudo"]=$_REQUEST["pseudo"];  // getting the login entered by the user in the form
	$pseudal=$_SESSION["pseudo"]; //affect the value of the login to the pseudal variable
	$_SESSION["auth"]=FALSE; //set the session authentication variable to false ( no connexion is allowed )

	include ("mysql.php");//making a link between the connexion file and the script to simplify the connexion to the DB 
    //(the script has nothing to do, that's the mysql.php file which is going to connect to the DB)

	$requete2 = "SELECT pseudo, mdp, nom_batiment FROM `batiment` WHERE pseudo='$pseudal'"; 
	//getting the login, passwd, building name from our table in which is the manager's informations 
	$resultat2 = mysqli_query($id_bd, $requete2) //making the request
	or die("Execution de la requete impossible : $requete2");//if impossible print stop the processus and print the message with the request
	$ligne2 = mysqli_fetch_row($resultat2); //putting the result of the request in a one-line in an array
	if($motdep==$ligne2[1] AND $pseudal==$ligne2[0] AND $ligne2[2]=='B'){ 
		//testing if the infos we got from our DB and from the user corresponds + testing the building to which the user should be connected
		// if the building is B and the infos are correct, then we connect the user and send him/her to the batimentB.php page
		$_SESSION["auth"]=TRUE;		
       	mysqli_close($id_bd);
		header('Location:batimentB.php');//send the user to the right page
	}elseif($motdep==$ligne2[1] AND $pseudal==$ligne2[0] AND $ligne2[2]=='E'){
		//if the previous test is wrong we test if the user is afiliate with a different building name 
		$_SESSION["auth"]=TRUE;		//if it's the case we connect the user to the right page
        mysqli_close($id_bd);
		header('Location:batimentE.php');//sending the user to the right page
	
	}else{ 
		// if the infos are not matching what we have in our DB, then we close the connexion and print a message saying the infos aren't the right ones
		$_SESSION = array(); // Reinitializing the session array
        session_destroy();   // Destruction of the session
        unset($_SESSION);    // Destruction of the session array
        mysqli_close($id_bd);
        echo "Le couple login/mot de passe est errone..."; //printing the error message
	}
 ?>