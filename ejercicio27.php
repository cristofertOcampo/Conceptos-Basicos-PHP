<?php

class unaClase{
    public static function unMetodo(){
        echo "Hola soy un metodo estatico";
    }
}

$objPrincipal = new unaClase();
$objPrincipal -> unMetodo();

unaClase::unMetodo();

?>