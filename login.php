<?php
session_start();
$bdd = mysqli_connect("localhost", 'rt', 'enzolebg', 'sae23');
if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);

        $recupUser = $bdd->prepare('SELECT mdp FROM administration WHERE pseudo = "enzo"');
        $recupUser->execute(array($pseudo, $mdp));
        if($recupUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            header('Location:administration.php');
        }else{
            echo 'Votre mot de passe ou pseudo est incorrect';
        }
    }else{
        echo "Veuillez compléter tous les champs...";
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
