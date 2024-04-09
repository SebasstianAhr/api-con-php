<?php 
//se trae el archivo poo.php
    require_once "./poo.php";

      //instancia de una clase, 
      $goku = new Saiyajin("Goku", 1000);
      echo $goku->NivelDePelea();
  
      echo "<br><br>";
  
      $vegeta = new Saiyajin(nivel_pelea:950, nombre:"vegeta");
      echo $vegeta->NivelDePelea("kkk");

?>