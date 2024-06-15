<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //accept only POST request
    // List of valid choices
    $validSalles = ["salle1", "salle2"];
    $validCapteurs = ["temperature", "humidité", "pression", "luminosité"];
    $validPlages = ["30min", "1h", "3h"];
    
    // Recovery of submitted values in the form
    $salle = $_POST["salle"];
    $capteur = $_POST["capteur"];
    $plage = $_POST["plage"];
}
    // Definition of time range according to selection
switch ($plage) {
    case '30min':
        $limit = 3;
        $plage_debut =  strtotime('-30 minutes');
        break;
    case '1h':
        $limit = 6;
        $plage_debut =  strtotime('-1 hour'); 
        break;
    case '3h':
        $limit = 18;
        $plage_debut =  strtotime('-3 hours'); 
        break;
    default:
        $limit = 10;
        $plage_debut = strtotime('-1 hour');
      
}

   // $temperature = $_POST["Température"];
   // $humidite = $_POST["Humidité"];
   // $pression = $_POST['Pression'];
   // $luminosite = $_POST["Luminosité"];



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
<?php  
//connection db
include("mysql.php");
//the sql query I want to make
$requete = "SELECT unite, valeur, heure, date FROM mesures ORDER BY heure DESC LIMIT 20";

//execution of the request
$resultat = mysqli_query($id_bd, $requete) or die("Execution de la requete impossible : $requete");

// Add a WHERE clause depending on the value selected 
// display value temperature if temperature has been chose in the form

if ($capteur == "temperature") {
$requete .= " WHERE capteur = 'temperature' AND salle = ? AND temperature = ? AND heure >=?";
} elseif ($capteur == "humidité") {
   $requete .= " WHERE capteur = 'humidité'";
} elseif ($capteur == "pression") {
  $requete .= " WHERE capteur = 'pression'";
} elseif ($capteur == "luminosité") {
   $requete .= " WHERE capteur = 'luminosité' AND salle = ? AND luminosite = ? AND heure >=?";
}  
    // Initialise variables to store the sum and the number of rows
$somme = 0;
$nb_lignes = 0;

 //html table to identify the form's choices
 echo '<h1>Tableau du Gestionnaire </h1>';
 echo '<table>';
 echo '<tr><th>Salles</th><th>Type de capteur</th><th>Plage temporelle</th></tr>';
echo '<tr>';
 echo '<td>' . $salle . '</td>';    //display the elements chose in the form
echo '<td>' . $capteur . '</td>';
 echo '<td>' . $plage . '</td>';
 echo '</tr>';
 echo '<tr>';
 echo '<td colspan="3"> Les valeurs </td>';
 echo '</tr>';

//array
while ($row = mysqli_fetch_assoc($resultat)) { // browse the results of an SQL query executed on a MySQL database
    // Displaying data in the table
    echo "<tr>";
    echo "<td>". $row['valeur']. "</td>"; // $row[1] = the firt column of the line
    echo "<td>". $row['unite']. "</td>";
    echo "<td>". $row['heure']. "</td>";
    echo "</tr>";
             //Add value to sum
    $somme += $row['valeur'];
    // Incrementing the number of lines
   $nb_lignes++;
    $moyenne = $somme / $nb_lignes;
    $min = min(array($row['valeur'])); //define the fonction min
    $max = max(array($row['valeur'])); 

    if ($row['valeur'] < $min) {
        $min = $row['valeur'];
     }
      if ($row['valeur'] > $max) {
          $max = $row['valeur'];
      }

    echo "<tr><td colspan='3'>Moyenne : ". number_format($moyenne, 2). "</td></tr>";
    echo "<tr><td colspan='3'>Minimum : ". $min. "</td></tr>";
    echo "<tr><td colspan='3'>Maximum : ". $max. "</td></tr>";
    }
echo "</table>";


?>

<!--<style>
    table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    display: none;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}
</style> -->


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
// Free up request resources
mysqli_free_result($resultat);
// Closing the database connection
mysqli_close($id_bd);
?>