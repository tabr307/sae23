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
                <a class="active" href="index.php"><img src="ressources/logo.png" id="image1"alt="logo"></a> 
                <section class="links">
                <a class="right" href="gestion2projet.php"> Gestion de Projet</a> 
                <a class="right" href="consultation.php"> Consultation</a> 
                <a class="right" href="gestion/gestion.php"> Gestion</a> 
                <a class="right" href="administration.php"> Administration</a>
        </section>
        <form method="POST" action="login.php" align="center">
	        <label for="mdp">Login :</label>
            <input type="text" id="pseudo" name="pseudo">
            <br><br>
            <label for="mdp">Mot de passe :</label>
	        <input type="password" id="mdp" name="mdp">
            <br><br>
	        <input type="submit" value="Se connecter">
        </form>

</body>
</html>
