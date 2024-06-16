<?php
// connexion script

  $id_bd = mysqli_connect("localhost", "rt", "passchroot" ,"sae23") //connecting the the sae23 DB with the rt login and passchroot password
  //the address of the DB is localhost because this script is runnign on the server
    or die("Probleme de connexion a la bd");//if connexion impossible stop the processus and echo the text for the user

  //character encoding ( in utf8 )
  mysqli_query($id_bd, "SET NAMES 'utf8'");

?>