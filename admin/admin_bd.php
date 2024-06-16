<?php
	session_start();
    include ("../mysql.php");
    $action_admin = $_POST['action_admin'];
    $pseudo_admin = $_POST['pseudo_admin'];
    $mdp_admin = $_POST['mdp_admin'];
    
    $action_mes = $_POST['action_mes'];
    $id_mes = $_POST['id_mes'];
    $unit_mes = $_POST['unit_mes'];
    $val_mes = $_POST['val_mes'];
    $date_mes = $_POST['date_mes'];
    $heure_mes = $_POST['heure_mes'];
    $idcap_mes = $_POST['idcap_mes'];
   

    // Afficher les valeurs récupérées
    echo "----------------table administration-----------------"
    echo "pseudo : " . htmlspecialchars($pseudo_admin) . "<br>";
    echo "mot de passe : " . htmlspecialchars($mdp_admin) . "<br>";
    echo "action a realiser: " . htmlspecialchars($action_admin) . "<br>";
    echo "------------------------------------------------------"
    echo "--------------------table mesures---------------------"
    echo "id de mesure : " . htmlspecialchars($id_mes) . "<br>";
    echo "unite de mesure : " . htmlspecialchars($unit_mes) . "<br>";
    echo "valeur de mesure : " . htmlspecialchars($val_mes) . "<br>";
    echo "date de mesure : " . htmlspecialchars($date_mes) . "<br>";
    echo "heure de mesure : " . htmlspecialchars($heure_mes) . "<br>";
    echo "id capteur de mesure : " . htmlspecialchars($idcap_mes) . "<br>";
    echo "action a realiser :" . htmlspecialchars($action_mes) . "<br>";
    echo "------------------------------------------------------"
	
?>
