<?php
/* Script de connexion à la base smi */

  $id_bd = mysqli_connect("localhost", "rt", "enzolebg", "sae23")
    or die("Connexion au serveur et/ou à la base de données impossible");

  /* Gestion de l'encodage des caractères */
  mysqli_query($id_bd, "SET NAMES 'utf8'");

?>
