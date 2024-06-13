<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceuil</title>
        <link href="styles/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>
        <section class="navbar">
            <a class="active" href="index.php"><img src="ressources/logo.png" id="image1"alt="logo"></a> 
            <section class="links">
            <a class="right" href="gestion2projet.php"> Gestion de Projet</a> 
            <a class="right" href="consultation.php"> Consultation</a> 
            <a class="right" href="form.php"> Gestion</a> 
            <a class="right" href="form.php"> Administration</a>
            </section>
        </section>
        <section class="container">
            <section class="content">
                <h1 id="titre1">Quel est l'objectif de ce site ? </h1>
                <p>Le but de ce site web est de fournir, dans le cadre de la SAÉ23, une intérface de gestion des données de capteurs de plusieurs métriques dans les salles de l'IUT. 
                    Il s'agit donc d'offir aux gestionnaires des bâtiments de l'IUT une interface simple et efficace permettant la visualisation des données de capteurs. 
                    Les bâtiments ont chacuns leur gestionnaire qui peut donc accéder a l'interface de gestion via ses logins et mot de passe pour plus de sécurité. 
                    Une interface pour l'administration est également mise en place afin de permettre a l'administrateur de pouvoir modifier la base de donnée le plus simplement et efficacement possible.</p>
                <h1>Mise en place / fonctionnement</h1>
                <p>- chaque mesure possède une date, un horaire et une valeur<br>
                   - chaque capteur possède un nom unique, un type, une unité et est installé dans une salle<br>
                   - chaque salle possède un nom unique, un type, une capacité d'acceuil et est dans un batiment<br>
                   - chaque batiment possède un nom unique et est géré par un gestionnaire<br>
                   - chaque gestionnaire possède un compte (login, mdp), grâce auquel il peut administrer son batiment<br>
                </p>
                <h1>Bâtiments Gérés</h1>                
                <img src="ressources/plan_iut.webp" alt="plan iut">
                <p>Les bâtiments gérés sont pour l'instant les bâtiments <u>B ( info ) et E ( R&T )</u>.<br>
                    Les salles dont les capteurs émettent des données sont les salles <u>E210</u>, <u>B112</u>, <u>E004</u>, <u>B109</u>.</p>
                    Les mesures sont prises en charge sont <u>températures</u>, <u>co2</u>, <u>humidité</u> ainsi que la <u>luminosité</u>.
                <h1>Mentions Légales</h1>
                
                <p>
                    <h3>1. Informations Générales</h3>

                    Nom du site web : SAE23<br>
                    URL du site web : http://83.113.15.31/sae23<br>
                    Responsable de publication : Valentin LALUE <br>
                    Contact : valentin.lalue.iut@gmail.com<br>

                    <h3>2. Propriété Intellectuelle</h3>

                    L'ensemble du contenu présent sur le site sae23 incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de Messieurs Lalue, Muller, Cazettes et Vilanove à l'exception des marques, logos ou contenus appartenant à d'autres sociétés partenaires ou auteurs.<br>

                    <h3>3. Conditions d'utilisation</h3>

                    L'utilisation du site sae23 implique l'acceptation pleine et entière des conditions générales d'utilisation ci-après décrites. Ces conditions d'utilisation sont susceptibles d'être modifiées ou complétées à tout moment, les utilisateurs du site [Nom du site web] sont donc invités à les consulter de manière régulière.
                    <h3>4. Limitations de responsabilité</h3>

                    Le site sae23 ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site sae23, et résultant soit de l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point 4, soit de l’apparition d’un bug ou d’une incompatibilité.

                    <h3>5. Liens hypertextes</h3>

                    Le site sae23 contient un certain nombre de liens hypertextes vers d’autres sites, mis en place avec l’autorisation de Mr Lalue. Cependant, sae23 n’a pas la possibilité de vérifier le contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité de ce fait.

                    <h3>6. Droit applicable et attribution de juridiction</h3>

                    Tout litige en relation avec l’utilisation du site sae23 est soumis au droit français. Il est fait attribution exclusive de juridiction aux tribunaux compétents de Toulouse.

                    <h3>7. Contact</h3>

                    Pour toute question concernant les mentions légales du site, vous pouvez nous contacter à l'adresse suivante : valentin.lalue.iut@gmail.com.

                </p>
            </section>
        </section>
            
          <footer>
            <ul>
              <li>Département Réseaux et Télécommunications</li>
              <li>Cazettes, Le Deunff, Muller, Lalue</li>
              <li>BUT1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
            </ul>  
          </footer>
    </body>
</html>
