<?php
/* Script de connexion à la base smi */

  $id_bd = new PDO('mysql:host=localhost;dbname=sae23;charset=utf8;','rt','enzolebg')
    or die("Connexion au serveur et/ou à la base de données impossible");

  /* Gestion de l'encodage des caractères */
  mysqli_query($id_bd, "SET NAMES 'utf8'");

?>