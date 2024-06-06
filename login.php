<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=sae23;charset=utf8', 'rt', 'enzolebg');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['envoi'])){ // Si l'utilisateur appuie sur le bouton d'envoi
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){ // Si les champs ne sont pas vides
        $pseudo = htmlspecialchars($_POST['pseudo']); // Défini la variable pseudo en se protégeant des injections grâce au htmlspecialchars
        $mdp = sha1($_POST['mdp']); // Défini la variable mdp en la chiffrant avec du sha1
        
        // Corrige le nom de la table et des colonnes
        $recupUser = $bdd->prepare('SELECT * FROM administration WHERE login = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp)); // Renvoie un tableau avec nos champs

        if($recupUser->rowCount() > 0){ // Si on a au moins un utilisateur correspondant, on le connecte
            $user = $recupUser->fetch();
            $_SESSION['pseudo'] = $user['login'];
            $_SESSION['mdp'] = $user['mdp'];
            $_SESSION['id'] = $user['id'];
            header('Location: index.php');
        }else{
            echo "Vos informations sont incorrectes";
        }
    }else{ // Si les champs sont vides, on demande à l'utilisateur de les remplir
        echo "Veuillez compléter tous les champs";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset='utf-8'>
</head>
<body>
    <form method="POST" action="" align="center">
        <input type="text" name="pseudo" autocomplete="off">
        <br><br>
        <input type="password" name="mdp" autocomplete="off">
        <br><br>
        <input type="submit" name="envoi">
    </form>
</body>
</html>
