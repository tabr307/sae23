<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Liste des choix valides
    $validSalles = ["salle1", "salle2"];
    $validCapteurs = ["temperature", "humidité", "pression", "luminosité"];
    $validPlages = ["30min", "1h", "3h"];
    
    // Récupération des valeurs soumises
    $salle = $_POST["salle Info"];
    $capteur = $_POST["capteur"];
    $plage = $_POST["plage"];

    echo '<table>';
    echo '<tr><th>Salle</th><th>Type de capteur</th><th>Plage temporelle</th></tr>';
    echo '<tr>';
    echo '<td>' . $salle . '</td>';
    echo '<td>' . $capteur . '</td>';
    echo '<td>' . $plage . '</td>';
    echo '</tr>';
    echo '</table>';
    
    
    if (in_array($salle, $validSalles) && in_array($capteur, $validCapteurs) && in_array($plage, $validPlages)) {
        header('Location: Infogest.php');
        exit();
    } else {
        // Redirection vers le formulaire avec un message d'erreur
        echo "Y a tel truc qui va pas"
        exit();
    }
} else {
    // Redirection vers le formulaire si l'accès n'est pas via POST
    echo "accès non via post"
    exit();
}

?>