<?php

class Color{

    public $playera;
    public $gorra;

    public function Ropa(){

        echo "<p> La playera es de color:  $this->playera</p>";

    }

}

$a = new Color();
$a -> playera = "negra";
$a -> gorra = "azul";
$a -> Ropa();


?>