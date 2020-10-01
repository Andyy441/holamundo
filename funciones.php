<?php

function bienvenida(){

    echo 'Tan simple como esto';
}
bienvenida();
echo '<br></br>';


//con parametros

function saludar($hola){
    echo $hola;
}
saludar("hola como estan");
echo '<br></br>';


//con retorno

function retorno($retornar){
return $retornar;

}
echo retorno("Retornando la funcion");
echo '<br></br>';


?>