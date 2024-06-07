<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=sae23;charset=utf8;', 'rt', 'enzolebg');
if (isset($_POST['envoi'])) { // si l'utilisateur appuie sur le bouton d'envoi
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) { // si les champs ne sont pas vides
        $pseudo = htmlspecialchars($_POST['pseudo']); // protection contre les injections
        $mdp = $_POST['mdp']; // récupération du mot de passe non haché

        // Préparation de la requête pour récupérer l'utilisateur
        $recupUser = $bdd->prepare('SELECT * FROM administration WHERE pseudo = ?');
        $recupUser->execute(array($pseudo));
        $user = $recupUser->fetch();

        if ($user && password_verify($mdp, $user['mdp'])) { // vérification du mot de passe
            $_SESSION['pseudo'] = $pseudo;
            header('Location: administration.php');
            exit();
        } else {
            echo "Vos informations sont incorrectes";
        }
    } else { // si les champs sont vides
        echo "Veuillez compléter tous les champs";
    }
}
?>
   
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset='utf-8'>
    <link href="./styles/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        </section>
        <form method="POST" action="" align="center">
            <input type="text" name="pseudo" autocomplete="off">
            <br><br>
            <input type="password" name="mdp" autocomplete="off">
            <br><br>
            <input type="submit" name="envoi">
        </form>
</body>
</html>
