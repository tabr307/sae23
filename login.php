<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=sae23;charset=utf8;', 'rt', 'enzolebg');
if(isset($_POST['envoi'])){ //si utilisateur appuie sur le bouton d'envoi
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){ //si les champs ne sont pas vides
        $pseudo = htmlspecialchars($_POST['pseudo']); //défini la variable pseudo en se protégant des injections grâce au htmlspecialchars
        $mdp = sha1($_POST['mdp']); //défini la variable mdp en la chiffrant avec du sha1
        $recupUser = $bdd->prepare('SELECT * FROM administration WHERE login = ? AND mdp = ?'); //récupère l'utilisateur dans la table administration auquel correspond les champs donnés
        $recupUser->execute(array($pseudo, $mdp)); //renvoie un tableau avec nos champs

        if($recupUser->rowCount() > 0){ // si on a au moins un des deux champs de notre tableau qui est rempli, ce qui prouve que l'utilisateur est dans notre table, alors on le connecte
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            header('Location: index.php');
        }else{
            echo "Vos informations sont incorrectes";
        }
    }else{//si les champs sont vides on demande a l'utilisateur de les remplir
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
        <section class="navbar">
            <a class="active" href="index.php"><img src="./ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
            <a class="right" href="#"> Gestion de Projet</a> 
            <a class="right" href="consultation.php"> Consultation</a> 
            <a class="right" href="gestion.php"> Gestion</a> 
            <a class="right" href="login.php"> Administration</a>
            </section>
            <br><br><br><br><br><br>
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
