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
    echo "Table selectionnee : " . htmlspecialchars($action) . "<br>";
    echo "Champ 1 : " . htmlspecialchars($ch1) . "<br>";
    echo "Champ 2 : " . htmlspecialchars($ch2) . "<br>";
    echo "Champ 3 : " . htmlspecialchars($ch3) . "<br>";
    echo "Champ 4 : " . htmlspecialchars($ch4) . "<br>";
    echo "Champ 5 : " . htmlspecialchars($ch5) . "<br>";
    echo "Champ 6 : " . htmlspecialchars($ch6) . "<br>";
    echo "Action : " . htmlspecialchars($action) . "<br>";

	include ("mysql.php");

	
?>
