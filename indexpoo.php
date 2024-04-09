<?php
//se trae el archivo poo.php
require_once "./poo.php";
require_once "./superSaiyan.php";


//instancia de una clase, 
$goku = new Saiyajin("Goku", 1000);
echo $goku->NivelDePelea();

echo "<br><br>";

$vegeta = new Saiyajin(nivel_pelea: 950, nombre: "vegeta");
echo $vegeta->NivelDePelea("kkk");

echo "<br><br>";

$gohan = new SuperSaiyan(nivel_pelea: 1500, nombre: "Gohan");
echo $gohan->NivelDePelea();
echo "<br><br>";
echo $gohan->Transformacion();
