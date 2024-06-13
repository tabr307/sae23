<?php
// Inclusion du fichier de connexion MySQL
include("mysql.php");

// Requête SQL pour récupérer les données souhaitées
$requete = "SELECT unite, valeur, heure, date, id_capteur FROM mesures ORDER BY heure DESC LIMIT 20";

// Exécution de la requête
$resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");

// Classer les résultats par salle
$mesures_par_salle = [];

while ($row = mysqli_fetch_assoc($resultat)) {
    // Déterminer la salle en fonction de l'id_capteur
    switch ($row['id_capteur']) {
        case 1:
            $salle = "B112";
            break;
        case 2:
            $salle = "E210";
            break;
        case 3:
            $salle = "E004";
            break;
        case 4:
            $salle = "B109";
            break;
        default:
            $salle = "Inconnue"; // Valeur par défaut si l'id_capteur ne correspond pas
    }

    // Ajouter la ligne de résultat au tableau de la salle correspondante
    $mesures_par_salle[$salle][] = $row;
}

// Début de la structure HTML
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
    <a class="active" href="index.php"><img src="ressources/logo.png" id="image1" alt="logo"></a> 
    <section class="links">
        <a class="right" href="gestion2projet.php">Gestion de Projet</a> 
        <a class="right" href="consultation.php">Consultation</a> 
        <a class="right" href="form.php">Gestion</a> 
        <a class="right" href="form.php">Administration</a>
    </section>
</section>

<h2>Tableau des Mesures par Salle</h2>

<?php
// Afficher un tableau pour chaque salle
foreach ($mesures_par_salle as $salle => $mesures) {
    // Limiter les résultats aux 5 dernières valeurs
    $mesures_limited = array_slice($mesures, 0, 5);

    echo "<h3>Salle : $salle</h3>";
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
        // Déterminer le bâtiment en fonction de l'id_capteur
        $batiment = ($row['id_capteur'] == 2 || $row['id_capteur'] == 3) ? 'RT' : 'INFO';

        // Afficher une ligne de tableau avec les données récupérées
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

<aside id="last">
    <hr />
    <p><em>Validation de la page HTML5 - CSS3</em></p>
    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Flalue.atwebpages.com%2FTP_R109%2Frwd.html" target="_blank"> 
        <img class="image-responsive" src="images/html5-validator-badge-blue.png" alt="HTML5 Valide !" />
    </a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <a href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Flalue.atwebpages.com%2FTP_R109%2Fstyles%2Fstyle2RWD.css" target="_blank">
        <img class="image-responsive" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
    </a>
</aside>

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
// Libérer les ressources de la requête
mysqli_free_result($resultat);

// Fermer la connexion à la base de données
mysqli_close($id_bd);
?>
