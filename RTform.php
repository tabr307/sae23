<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset='utf-8'>
    <link href="./styles/main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    </head>
    <body>        
            <form method="POST" action=".php" align="center">
              
            <!-- Champ de sélection pour la salle -->
                <label for="salle Info">Sélectionnez une salle :</label>
                <select id="salle" name="salle">
                <option value="salle1">Salle 1</option>
                <option value="salle2">Salle 2</option>
                </select>
        <br><br>
                <!-- Champ de sélection pour le type de capteur -->
                <label for="capteur">Sélectionnez un type de capteur :</label>
                <select id="capteur" name="capteur">
                <option value="temperature">Température</option>
                <option value="humidité">Humidité</option>
                <option value="pression">Pression</option>
                <option value="luminosité">Luminosité</option>
                </select>
        <br><br>

                <!-- Champ de sélection pour la plage temporelle -->
                <label for="plage">Sélectionnez une plage temporelle :</label>
                <select id="plage" name="plage">
                <option value="matin">Matin</option>
                <option value="après-midi">Après-midi</option>
                <option value="soir">Soir</option>
                </select>
        <br><br>

                <button type="submit"> Soumettre </button>
            </form>
        
</body>
</html>