<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Liste des choix valides
    $validSalles = ["salle1", "salle2"];
    $validCapteurs = ["temperature", "humidité", "pression", "luminosité"];
    $validPlages = ["30min", "1h", "3h"];
    
    // Récupération des valeurs soumises
    $salle = $_POST["salle"];
    $capteur = $_POST["capteur"];
    $plage = $_POST["plage"];

    include("mysql.php");

    $requete = "SELECT valeur, heure, date FROM mesures ORDER BY heure DESC LIMIT 20";

    $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");

    //$val1 = ;

    echo '<h1>Tableau du Gestionnaire </h1>';
    echo '<table>';
    echo '<tr><th>Salles</th><th>Type de capteur</th><th>Plage temporelle</th></tr>';
    echo '<tr>';
    echo '<td>' . $salle . '</td>';
    echo '<td>' . $capteur . '</td>';
    echo '<td>' . $plage . '</td>';
    echo '</tr>';
    
    foreach ($resultat as $row) {

    echo '<tr>';
    echo "<td>" . $row['valeur'] . "</td>";
    echo "<td>" . $row['heure'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo '</tr>';

    echo '</table>';
    }
    
    
    
    
    echo '<style>
    table {
    border-collapse: collapse;
    width: 80%;
    margin: 20px 0;
    font-size: 18px;
    text-align: left;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #009879;
    color: #ffffff;
}

thead th {
    padding: 12px 15px;
}

tbody tr {
    border-bottom: 1px solid #dddddd;
}

tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

tbody td {
    padding: 12px 15px;
}

tbody tr:hover {
    background-color: #f1f1f1;
} </style>';
    
}    

// Libérer les ressources de la requête
mysqli_free_result($resultat);

// Fermer la connexion à la base de données
mysqli_close($id_bd);
?>