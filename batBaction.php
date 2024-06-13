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

    //connection bd
    include("mysql.php");
    //la requete sql que je veux faire
    $requete = "SELECT valeur, heure, date FROM mesures ORDER BY heure DESC LIMIT 20";
    //éxécution de la requète
    $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");

   
    }   //tableau html pour identifier les choix du form
    echo '<h1>Tableau du Gestionnaire </h1>';
    echo '<table>';
    echo '<tr><th>Salles</th><th>Type de capteur</th><th>Plage temporelle</th></tr>';
    echo '<tr>';
    echo '<td>' . $salle . '</td>';
    echo '<td>' . $capteur . '</td>';
    echo '<td>' . $plage . '</td>';
    echo '</tr>';

    //Utilisation de POST pour recup les bonnes donnée ?
    
    //boucle pour afficher les données récupérées
    foreach ($resultat as $row) {

    echo '<tr>';
    echo "<td>" . $row['valeur'] . "</td>";
    echo "<td>" . $row['heure'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo '</tr>';

    echo '</table>';
    }
    
    //CALCUL DES METRIQUE LETS GO

    $tableau = ['valeur'];
    //$tableau = [1, 2, 3, 4, 5, 6 ,10];
    

    // Calcul de la somme des éléments du tableau
    $somme = array_sum($tableau);

    // Calcul du nombre d'éléments dans le tableau
    $nombre_elements = count($tableau);

    // Calcul de la moyenne
    if ($nombre_elements > 0) {
    $moyenne = $somme / $nombre_elements;
    }

    // Utilisation de la fonction min() pour trouver la valeur minimale
    $minimum = min($tableau);
    $maximum = max($tableau);

    //tableau pour afficher moyenne, min et max
    echo '<h1>Les métriques</h1>';
    echo '<h3>Affichage de la moyenne, le min et le max des salles</h3>';
    echo'<table>';   
    echo '<tr><th>Moyenne</th><th>Minimum</th><th>Maximum</th></tr>';
    echo '<tr>';
    echo '<td>' . $salle . '</td>';
    echo '<td>' . $capteur . '</td>';
    echo '<td>' . $plage . '</td>';
    echo '</tr>'; 
    echo '<tr>';
    echo '<td>' . $moyenne . '</td>';
    echo '<td>' . $minimum . '</td>';
    echo '<td>' . $maximum . '</td>';
    echo '</tr>'; 
    echo '</table>';
    
    //partie style pour les tableaux
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
    
   

// Libérer les ressources de la requête
mysqli_free_result($resultat);

// Fermer la connexion à la base de données
mysqli_close($id_bd);
?>