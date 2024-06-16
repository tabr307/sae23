<?php
	session_start();
    include ("../mysql.php");
    $action = $_POST['capteur'];
    $ch1 = $_POST['pseudo_admin'];
    $ch2 = $_POST['mdp_admin'];
    $ch3 = $_POST['ch3'];
    $ch4 = $_POST['ch4'];
    $ch5 = $_POST['ch5'];
    $ch6 = $_POST['ch6'];

   

    // Afficher les valeurs récupérées
    echo "Champ 1 : " . htmlspecialchars($ch1) . "<br>";
    echo "Champ 2 : " . htmlspecialchars($ch2) . "<br>";
    echo "Action : " . htmlspecialchars($action) . "<br>";  

	
?>
