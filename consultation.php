<?php
// include of the login script
include("mysql.php");

// sql request to get the required data
$requete = "SELECT unite, valeur, heure, date, id_capteur FROM mesures ORDER BY id_mesure DESC LIMIT 20";

// request execution
$resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");

// sorting of the results
$mesures_par_salle = [];

while ($row = mysqli_fetch_assoc($resultat)) {
    // determine the room depending on id_capteur
    switch ($row['id_capteur']) {
        case 2:
            $salle = "B112";
            break;
        case 3:
            $salle = "E210";
            break;
        case 4:
            $salle = "E004";
            break;
        case 1:
            $salle = "B109";
            break;
        default:
            $salle = "Inconnue"; // in case if "salle" is unknown
    }

    //add the result in the table (in the right room)
    $mesures_par_salle[$salle][] = $row;
}

// html code
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des Mesures par Salle</title>
    <link href="styles/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<section class="navbar">
            <a class="active" href="index.php"><img src="ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
            <a class="right" href="gestion2projet.php"> Gestion de Projet</a> 
            <a class="right" href="consultation.php"> Consultation</a> 
            <a class="right" href="form.php"> Gestion</a> 
            <a class="right" href="admin/administration.php"> Administration</a>
            </section>
        </section>
    
    <section class="container">
        <section class="content">
            <h1>Tableau des Mesures par Salle</h1>

            <?php
            // create a table for each room
            foreach ($mesures_par_salle as $salle => $mesures) {
                // limit the result to the last 5 values
                $mesures_limited = array_slice($mesures, 0, 5);

                echo "<h1>Salle : $salle</h1>";
                echo "<table>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Unité</th>";
                echo "<th>Valeur</th>";
                echo "<th>Heure</th>";
                echo "<th>Date</th>";
                echo "<th>Bâtiment</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                foreach ($mesures_limited as $row) {
                    // determine the building depending on id_capteur
                    $batiment = ($row['id_capteur'] == 3 || $row['id_capteur'] == 4) ? 'RT' : 'INFO';

                    // print every table line according to the values
                    echo "<tr>";
                    echo "<td>" . $row['unite'] . "</td>";
                    echo "<td>" . $row['valeur'] . "</td>";
                    echo "<td>" . $row['heure'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "<td>" . $batiment . "</td>";
                    echo "</tr>";
                }

                echo "</tbody>";
                echo "</table>";
            }
            ?>
        </section>
    </section>
<footer>
    <ul>
        <li>Département Réseaux et Télécommunications</li>
        <li>Cazettes, Le Deunff, Muller, Lalue</li>
        <li>BUT1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
    </ul>  
</footer>
</body>
</html>

<?php
// closing the connexion
mysqli_free_result($resultat);
mysqli_close($id_bd);
?>