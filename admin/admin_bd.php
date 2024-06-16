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
   
    $action_cap = $_POST['action_cap'];
    $id_cap = $_POST['id_cap'];
    $nom_cap = $_POST['nom_cap'];
    $idsalle_cap = $_POST['idsalle_cap'];
   
    $action_salle = $_POST['action_salle'];
    $id_salle = $_POST['id_salle'];
    $nom_salle = $_POST['nom_salle'];
    $idbat_salle = $_POST['idbat_salle'];

    $action_bat = $_POST['action_bat'];
    $id_bat = $_POST['id_bat'];
    $nom_bat = $_POST['nom_bat'];
    $pseudo_bat = $_POST['pseudo_bat'];
    $mdp_bat = $_POST['mdp_bat'];

    // Afficher les valeurs récupérées
    echo "----------------table administration------------------"."<br>";
    echo "pseudo : " . htmlspecialchars($pseudo_admin) . "<br>";
    echo "mot de passe : " . htmlspecialchars($mdp_admin) . "<br>";
    echo "action a realiser : " . htmlspecialchars($action_admin) . "<br>";
    echo "------------------------------------------------------" . "<br>";
    echo "--------------------table mesures---------------------" . "<br>";
    echo "id de mesure : " . htmlspecialchars($id_mes) . "<br>";
    echo "unite de mesure : " . htmlspecialchars($unit_mes) . "<br>";
    echo "valeur de mesure : " . htmlspecialchars($val_mes) . "<br>";
    echo "date de mesure : " . htmlspecialchars($date_mes) . "<br>";
    echo "heure de mesure : " . htmlspecialchars($heure_mes) . "<br>";
    echo "id capteur de mesure : " . htmlspecialchars($idcap_mes) . "<br>";
    echo "action a realiser : " . htmlspecialchars($action_mes) . "<br>";
    echo "------------------------------------------------------" . "<br>";
    echo "--------------------table capteur---------------------" . "<br>";
    echo "id de capteur : " . htmlspecialchars($id_cap) . "<br>";
    echo "nom de capteur : " . htmlspecialchars($nom_cap) . "<br>";
    echo "id salle de capteur : " . htmlspecialchars($idsalle_cap) . "<br>";
    echo "action a realiser : " . htmlspecialchars($action_cap) . "<br>";
    echo "------------------------------------------------------" . "<br>";
    echo "--------------------table salle-----------------------" . "<br>";
    echo "id de salle : " . htmlspecialchars($id_salle) . "<br>";
    echo "nom salle : " . htmlspecialchars($nom_salle) . "<br>";
    echo "id batiment de salle : " . htmlspecialchars($idbat_salle) . "<br>";
    echo "action a realiser : " . htmlspecialchars($action_salle) . "<br>";
    echo "------------------------------------------------------" . "<br>";
    echo "--------------------table batiment--------------------" . "<br>";
    echo "id de batiment : " . htmlspecialchars($id_bat) . "<br>";
    echo "nom de batiment : " . htmlspecialchars($nom_bat) . "<br>";
    echo "pseudo gestionnaire batiment : " . htmlspecialchars($pseudo_bat) . "<br>";
    echo "mdp gestionnaire batiment : " . htmlspecialchars($mdp_bat) ."<br>";
    echo "action a realiser : " . htmlspecialchars($action_bat) . "<br>";
    echo "------------------------------------------------------" . "<br>";
?>
