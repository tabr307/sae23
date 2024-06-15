<?php
	session_start();
    include ("mysql.php");
    $table = $_POST['capteur'];
    $ch1 = $_POST['ch1'];
    $ch2 = $_POST['ch2'];
    $ch3 = $_POST['ch3'];
    $ch4 = $_POST['ch4'];
    $ch5 = $_POST['ch5'];
    $ch6 = $_POST['ch6'];

    // Récupérer la valeur du bouton radio sélectionné
    if (isset($_POST['suppr'])) {
        $action = $_POST['suppr'];
        mysqli_query($id_bd, "DELETE FROM `$table` WHERE ");
    } elseif (isset($_POST['mod'])) {
        $action = $_POST['mod'];
    } elseif (isset($_POST['add'])) {
        $action = $_POST['add'];
    }

    // Afficher les valeurs récupérées
    echo "Table selectionnee : " . htmlspecialchars($table) . "<br>";
    echo "Champ 1 : " . htmlspecialchars($ch1) . "<br>";
    echo "Champ 2 : " . htmlspecialchars($ch2) . "<br>";
    echo "Champ 3 : " . htmlspecialchars($ch3) . "<br>";
    echo "Champ 4 : " . htmlspecialchars($ch4) . "<br>";
    echo "Champ 5 : " . htmlspecialchars($ch5) . "<br>";
    echo "Champ 6 : " . htmlspecialchars($ch6) . "<br>";
    echo "Action : " . htmlspecialchars($action) . "<br>";

	include ("mysql.php");

	
?>
