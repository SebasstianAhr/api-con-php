<?php

$nombre = "sebasstian❤️";
$x = 3;
$y = 3;
$suma = $x+$y;
$validacion = $x == $y;
define("CONSTANTE","https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png"); //las constantes en php se declaran en letras mayusculas  
//define su uso el global

// const CONSTANTE = "Hola";  Su uso es local

?>

<?php if($validacion == true):?>
    <h2>son iguales</h2>
<?php else:?>
    <h2>no son iguales</h2>
<?php endif?>



<h1> <?= "Hola \"$nombre\", la suma de $x y $y es: $suma " ?></h1>

<img src="<?= CONSTANTE?>" alt=""> <!-- para llamar constantes solo se escribe el nombre de como se declaro-->


<?php
    $name = "sebasstian";
    $age = 17;
    $edades = match(true){
        $age < 2 => "Eeres un bebe, $name",
        $age < 10 => "Eeres un ni;o, $name",
        $age < 18 => "Eeres un joven, $name",
        $age < 40 => "Eeres un adulto, $name",
        default => "Eeres un viejo, $name",
    };

    $array = ["hola", 2, true];
    $array[] = "Entonces";
    $array[2]= "Variable"; //esto es para poner este vlor en la posicion 2 de mi array

    $person = [
        "name" => "sebasstian",
        "edad" => 21,
        "lenguajes" => ["java", "python"]
    ];

    $person["name"] = "REY";
    $person["lenguajes"][]="javascript"


?>
<h2><?=$edades?></h2>
<ul>
    <?php foreach($array as $posicion => $item):?>
        <li><?=$posicion. " " . $item ?></li>
    <?php endforeach?>
</ul>









<style> 
    img{
        width: 300px;
    }

    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>