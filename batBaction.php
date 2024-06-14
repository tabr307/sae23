<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // List of valid choices
    $validSalles = ["salle1", "salle2"];
    $validCapteurs = ["temperature", "humidité", "pression", "luminosité"];
    $validPlages = ["30min", "1h", "3h"];
    
    // Recovery of submitted values
    $salle = $_POST["salle"];
    $capteur = $_POST["capteur"];
    $plage = $_POST["plage"];

    // Definition of time range according to selection
switch ($plage) {
    case '30min':
        $limit = 3;
      //  $plage_debut = date('Y-m-d H:i:s', strtotime('-30 minutes'));
       // $plage_fin = date('Y-m-d H:i:s');
        break;
    case '1h':
        $limit = 6;
       // $plage_debut = date('Y-m-d H:i:s', strtotime('-1 hour'));
       // $plage_fin = date('Y-m-d H:i:s');
        break;
    case '3h':
        $limit = 18;
      //  $plage_debut = date('Y-m-d H:i:s', strtotime('-3 hours'));
       // $plage_fin = date('Y-m-d H:i:s');
        break;
    default:
        $limit = 10;
      //  $plage_debut = date('Y-m-d H:i:s', strtotime('-1 hour'));
      //  $plage_fin = date('Y-m-d H:i:s');
}

   // $temperature = $_POST["Température"];
   // $humidite = $_POST["Humidité"];
   // $pression = $_POST['Pression'];
   // $luminosite = $_POST["Luminosité"];
}


    //connection db
    include("mysql.php");
    //the sql query I want to make
    $requete = "SELECT unite, valeur, heure, date FROM mesures ORDER BY heure DESC LIMIT 20";

  //execution of the request
  $resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");

    // Add a WHERE clause depending on the value selected

   if ($capteur == "temperature") {
   $requete .= " WHERE capteur = 'temperature' AND salle = ? AND type_de_capteur = ?";
   } elseif ($capteur == "humidité") {
       $requete .= " WHERE capteur = 'humidité'";
   } elseif ($capteur == "pression") {
      $requete .= " WHERE capteur = 'pression'";
   } elseif ($capteur == "luminosité") {
       $requete .= " WHERE capteur = 'luminosité' AND salle = ? AND type_de_capteur = ?";
   }

// Définition de la requête SQL de base
//if ($capteur == "temperature") {
 //   $query = "SELECT temperature, heure, date FROM mesures WHERE salle = ? AND type_de_capteur = ?";
//} elseif ($capteur == "humidite") {
///    $query = "SELECT humidite, heure, date FROM mesures WHERE salle = ? AND type_de_capteur = ?";
//} elseif ($capteur == "pression") {
 //   $query = "SELECT pression, heure, date FROM mesures WHERE salle = ? AND type_de_capteur = ?";
//} elseif ($capteur == "luminosite") {
 //   $query = "SELECT luminosite, heure, date FROM mesures WHERE salle = ? AND type_de_capteur = ?";
//}
  
// Initialise variables to store the sum and the number of rows
$somme = 0;
$nb_lignes = 0;
$min = PHP_INT_MIN;
$max = PHP_INT_MAX;

 //html table to identify the form's choices
 echo '<h1>Tableau du Gestionnaire </h1>';
 echo '<table>';
 echo '<tr><th>Salles</th><th>Type de capteur</th><th>Plage temporelle</th></tr>';
echo '<tr>';
 echo '<td>' . $salle . '</td>';
echo '<td>' . $capteur . '</td>';
 echo '<td>' . $plage . '</td>';
 echo '</tr>';

while ($row = mysqli_fetch_array($resultat)) {
    // Displaying data in the table
    echo "<tr>";
    echo "<td>". $row[0]. "</td>";
    echo "<td>". $row[1]. "</td>";
    echo "<td>". $row[2]. "</td>";
    echo "<td>". $row[3]. "</td>";
    echo "</tr>";
             //Add value to sum
    $somme += $row['valeur'];
    // Incrementing the number of lines
   $nb_lignes++;
   if ($row['valeur'] < $min) {
      $min = $row['valeur'];
   }
    if ($row['valeur'] > $max) {
        $max = $row['valeur'];
    }

    }
    $moyenne = $somme / $nb_lignes;
    echo "<tr><td colspan='3'>Moyenne : ". number_format($moyenne, 2). "</td></tr>";
    echo "<tr><td colspan='3'>Minimum : ". $min. "</td></tr>";
    echo "<tr><td colspan='3'>Maximum : ". $max. "</td></tr>";

echo "</table>";

// Free up request resources
mysqli_free_result($resultat);
// Closing the database connection
mysqli_close($id_bd);

 //   while ($row = mysqli_fetch_array($resultat)) {
        // Affichage des données dans le tableau
 //       echo "<tr>";
 //       echo "<td>". $row['valeur']. "</td>";
  //      echo "<td>". $row['heure']. "</td>";
 //       echo "<td>". $row['date']. "</td>";
 //       echo "</tr>";
  
//    echo '</table>';
  //  }
   

    //style section for table
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
    
?>