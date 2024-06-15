<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bâtiment INFO</title>
        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
    <section class="navbar">
            <a class="active" href="index.php"><img src="ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
            <a class="right" href="gestion2projet.php"> Gestion de Projet</a> 
            <a class="right" href="consultation.php"> Consultation</a> 
            <a class="right" href="form.php"> Gestion</a> 
            <a class="right" href="admin/administration.php"> Administration</a>
            </section>
        </section>
        <h1>Page de gestion du bâtiment INFO - Approche Node-RED<h1>
        <ul>
            <li>
                <h3>Temperature<h3>
                    <iframe src="http://83.113.15.31:3000/d-solo/bdnykz0c2ap6of/batiment-info?orgId=1&from=1717755169675&to=1717776769675&panelId=1" width="500" height="500" frameborder="0"></iframe>
                    <iframe src="http://83.113.15.31:3000/d-solo/bdnykz0c2ap6of/batiment-info?orgId=1&from=1717755192485&to=1717776792485&panelId=4" width="500" height="500" frameborder="0"></iframe>
            </li>
            <li>
                <h3>CO2</h3>
                <iframe src="http://83.113.15.31:3000/d-solo/bdnykz0c2ap6of/batiment-info?orgId=1&from=1717755762754&to=1717777362754&panelId=3" width="500" height="500" frameborder="0"></iframe>
                <iframe src="http://83.113.15.31:3000/d-solo/bdnykz0c2ap6of/batiment-info?orgId=1&from=1717755776559&to=1717777376559&panelId=5" width="500" height="500" frameborder="0"></iframe>
            </li>
            <li>
                <h3>Humidité</h3>
                <iframe src="http://83.113.15.31:3000/d-solo/bdnykz0c2ap6of/batiment-info?orgId=1&from=1717756195287&to=1717777795287&panelId=2" width="500" height="500" frameborder="0"></iframe>
                <iframe src="http://83.113.15.31:3000/d-solo/bdnykz0c2ap6of/batiment-info?orgId=1&from=1717756222087&to=1717777822087&panelId=6" width="500" height="500" frameborder="0"></iframe>
            </li>
        </ul>

    </body>
</html>