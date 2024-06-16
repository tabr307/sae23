<?php
	session_start(); //initiating a session
    include ("../mysql.php"); //making a link between the connexion file and the script to simplify the connexion to the DB 
    //(the script has nothing to do, that's the mysql.php file which is going to connect to the DB)

    //getting the form data for each fieldset ( 1 fieldset = 1 table in the DB )
    //---------------- Table administration---------------------------
    $action_admin = $_POST['action_admin']; //getting the select data from the form and for the administration table( add, modify, delete )
    $pseudo_admin = $_POST['pseudo_admin']; //getting the data from the first table field
    $mdp_admin = $_POST['mdp_admin']; //getting the data from the second table field
    //----------------------------------------------------------------

    //---------------- Table mesures----------------------------------
    $action_mes = $_POST['action_mes']; //getting the select data from the form and for the mesures table ( add, modify, delete )
    $id_mes = $_POST['id_mes'];//getting the data from the first table field etc
    $unit_mes = $_POST['unit_mes']; //getting the data .....
    $val_mes = $_POST['val_mes']; //....
    $date_mes = $_POST['date_mes'];
    $heure_mes = $_POST['heure_mes'];
    $idcap_mes = $_POST['idcap_mes'];
    //----------------------------------------------------------------

    //---------------- Table capteur----------------------------------
    $action_cap = $_POST['action_cap'];
    $id_cap = $_POST['id_cap'];
    $nom_cap = $_POST['nom_cap'];
    $idsalle_cap = $_POST['idsalle_cap'];
    //----------------------------------------------------------------

    //---------------- Table salle------------------------------------
    $action_salle = $_POST['action_salle'];
    $id_salle = $_POST['id_salle'];
    $nom_salle = $_POST['nom_salle'];
    $idbat_salle = $_POST['idbat_salle'];
    //----------------------------------------------------------------

    //---------------- Table batiment---------------------------------
    $action_bat = $_POST['action_bat'];
    $id_bat = $_POST['id_bat'];
    $nom_bat = $_POST['nom_bat'];
    $pseudo_bat = $_POST['pseudo_bat'];
    $mdp_bat = $_POST['mdp_bat'];
    //----------------------------------------------------------------
    
    function executeQuery($sql) {
        global $conn; // Assume that $conn is your database connection
        if ($conn->query($sql) === TRUE) {
            echo "Query executed successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Générer et exécuter les requêtes SQL pour chaque table
    
    // Table administration
    if ($action_admin == 'add') {
        $sql = "INSERT INTO administration (pseudo, mdp) VALUES ('$pseudo_admin', '$mdp_admin')";
        executeQuery($sql);
    } elseif ($action_admin == 'modify') {
        $sql = "UPDATE administration SET mdp='$mdp_admin' WHERE pseudo='$pseudo_admin'";
        executeQuery($sql);
    } elseif ($action_admin == 'delete') {
        $sql = "DELETE FROM administration WHERE pseudo='$pseudo_admin'";
        executeQuery($sql);
    }
    
    // Table mesures
    if ($action_mes == 'add') {
        $sql = "INSERT INTO mesures (id, unit, val, date, heure, idcap) VALUES ('$id_mes', '$unit_mes', '$val_mes', '$date_mes', '$heure_mes', '$idcap_mes')";
        executeQuery($sql);
    } elseif ($action_mes == 'modify') {
        $sql = "UPDATE mesures SET unit='$unit_mes', val='$val_mes', date='$date_mes', heure='$heure_mes', idcap='$idcap_mes' WHERE id='$id_mes'";
        executeQuery($sql);
    } elseif ($action_mes == 'delete') {
        $sql = "DELETE FROM mesures WHERE id='$id_mes'";
        executeQuery($sql);
    }
    
    // Table capteur
    if ($action_cap == 'add') {
        $sql = "INSERT INTO capteur (id, nom, idsalle) VALUES ('$id_cap', '$nom_cap', '$idsalle_cap')";
        executeQuery($sql);
    } elseif ($action_cap == 'modify') {
        $sql = "UPDATE capteur SET nom='$nom_cap', idsalle='$idsalle_cap' WHERE id='$id_cap'";
        executeQuery($sql);
    } elseif ($action_cap == 'delete') {
        $sql = "DELETE FROM capteur WHERE id='$id_cap'";
        executeQuery($sql);
    }
    
    // Table salle
    if ($action_salle == 'add') {
        $sql = "INSERT INTO salle (id, nom, idbat) VALUES ('$id_salle', '$nom_salle', '$idbat_salle')";
        executeQuery($sql);
    } elseif ($action_salle == 'modify') {
        $sql = "UPDATE salle SET nom='$nom_salle', idbat='$idbat_salle' WHERE id='$id_salle'";
        executeQuery($sql);
    } elseif ($action_salle == 'delete') {
        $sql = "DELETE FROM salle WHERE id='$id_salle'";
        executeQuery($sql);
    }
    
    // Table batiment
    if ($action_bat == 'add') {
        $sql = "INSERT INTO batiment (id, nom, pseudo, mdp) VALUES ('$id_bat', '$nom_bat', '$pseudo_bat', '$mdp_bat')";
        executeQuery($sql);
    } elseif ($action_bat == 'modify') {
        $sql = "UPDATE batiment SET nom='$nom_bat', pseudo='$pseudo_bat', mdp='$mdp_bat' WHERE id='$id_bat'";
        executeQuery($sql);
    } elseif ($action_bat == 'delete') {
        $sql = "DELETE FROM batiment WHERE id='$id_bat'";
        executeQuery($sql);
    }
    
    $conn->close();
    ?>

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
