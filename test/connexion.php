<?php
   try{
      $pdo=new PDO("mysql:host=83.113.15.31;dbname=sae23","rt","enzolebg");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>