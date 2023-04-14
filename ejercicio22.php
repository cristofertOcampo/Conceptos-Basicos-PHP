<?php

$frutas=array("f"=>"Fresa","p"=> "Pera","m"=> "Manzana");

print_r($frutas);

echo $frutas["p"]."<br/>";

foreach ($frutas as $indice =>&$valor) {
    echo "El valor ".$valor." Tiene el índice:".$indice."<br/>";
}
?>