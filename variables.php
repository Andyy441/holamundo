<?php

//variable de un numero 
$numero = 10; 
echo $numero; 
echo '<br><br>';

//variable tipo texto
$nombre = "Andres";
echo 'Mi nombre es: '.$nombre;
echo '<br><br>'; 


//booleana

$booleana = true;

echo 'variable booleana: '.$booleana;
echo '<br><br>'; 

//variable tipo arreglo

$arreglo = array("Andres", "Andrea");

echo $arreglo[1];
echo '<br><br>'; 

//variable objeto (imporatant)
$objeto = (object)["mueble1"=>"armario", "mueble2"=>"escritorio"];

echo $objeto->mueble2;
echo '<br><br>'; 

?>