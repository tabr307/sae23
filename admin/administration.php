<?php
session_start();

// Configuration de la base de données
$host = '83.113.15.31'; // Adresse du serveur de la base de données (généralement localhost)
$dbname = 'sae23'; // Nom de la base de données
$username = 'rt'; // Nom d'utilisateur de la base de données
$password = 'enzolebg'; // Mot de passe de la base de données

// Connexion à la base de données
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérification du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    // Vérification des informations d'identification
    if ($login === 'rt' && $mdp === 'enzolebg') {
        $_SESSION['loggedin'] = true;
        header('Location: administration.php');
        exit;
    } else {
        $error = 'Login ou mot de passe incorrect.';
    }
}

// Vérification de la session
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Connexion</title>
    </head>
    <body>
        <h2>Connexion</h2>
        <?php if (isset($error)) { echo '<p style="color:red;">' . $error . '</p>'; } ?>
        <form method="post" action="administration.php">
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" required><br>
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp" required><br>
            <button type="submit">Se connecter</button>
        </form>
    </body>
    </html>
<?php
    exit;
}

// Affichage des données si l'utilisateur est connecté
$queryBatiments = $pdo->query('SELECT * FROM batiment');
$querySalles = $pdo->query('SELECT * FROM salle');
$queryCapteurs = $pdo->query('SELECT * FROM capteur');
$queryMesures = $pdo->query('SELECT * FROM mesures');
$queryAdmin = $pdo->query('SELECT * FROM administration');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administration</title>
</head>
<body>
    <h2>Administration - Données des Tables</h2>

    <h3>Batiments</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Login</th>
            <th>Mot de Passe</th>
        </tr>
        <?php while ($row = $queryBatiments->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id_batiment']); ?></td>
                <td><?php echo htmlspecialchars($row['nom_batiment']); ?></td>
                <td><?php echo htmlspecialchars($row['login']); ?></td>
                <td><?php echo htmlspecialchars($row['mdp']); ?></td>
            </tr>
        <?php } ?>
    </table>

    <h3>Salles</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Type</th>
            <th>Capacité</th>
            <th>ID Batiment</th>
        </tr>
        <?php while ($row = $querySalles->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id_salle']); ?></td>
                <td><?php echo htmlspecialchars($row['nom_salle']); ?></td>
                <td><?php echo htmlspecialchars($row['type']); ?></td>
                <td><?php echo htmlspecialchars($row['capacite']); ?></td>
                <td><?php echo htmlspecialchars($row['id_batiment']); ?></td>
            </tr>
        <?php } ?>
    </table>

    <h3>Capteurs</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Type</th>
            <th>Unité</th>
            <th>ID Salle</th>
        </tr>
        <?php while ($row = $queryCapteurs->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id_capteur']); ?></td>
                <td><?php echo htmlspecialchars($row['nom_capteur']); ?></td>
                <td><?php echo htmlspecialchars($row['type']); ?></td>
                <td><?php echo htmlspecialchars($row['unite']); ?></td>
                <td><?php echo htmlspecialchars($row['id_salle']); ?></td>
            </tr>
        <?php } ?>
    </table>

    <h3>Mesures</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Horaire</th>
            <th>Valeur</th>
            <th>ID Capteur</th>
        </tr>
        <?php while ($row = $queryMesures->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id_mesure']); ?></td>
                <td><?php echo htmlspecialchars($row['date']); ?></td>
                <td><?php echo htmlspecialchars($row['horaire']); ?></td>
                <td><?php echo htmlspecialchars($row['valeur']); ?></td>
                <td><?php echo htmlspecialchars($row['id_capteur']); ?></td>
            </tr>
        <?php } ?>
    </table>

    <h3>Administration</h3>
    <table border="1">
        <tr>
            <th>Login</th>
            <th>Mot de Passe</th>
        </tr>
        <?php while ($row = $queryAdmin->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['login']); ?></td>
                <td><?php echo htmlspecialchars($row['mdp']); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
