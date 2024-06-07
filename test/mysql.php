<?php
/* Script de connexion à la base smi */

  $id_bd = mysqli_connect("fdb31.eohost.com", "4379915_smi", "BUT1_RT_da-silva", "4379915_smi")
    or die("Connexion au serveur et/ou à la base de données impossible");

  /* Gestion de l'encodage des caractères */
  mysqli_query($id_bd, "SET NAMES 'utf8'");

?>
