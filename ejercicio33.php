<?php

$jsonContenido='[
    {
        "nombre":"Cristofert", 
        "apellido":"Ocampo"
    },
    {
        "nombre":"Sandra", 
        "apellido":"Mendoza"
    } 
    ]';

    $resultado = json_decode( $jsonContenido );
    // print_r( $resultado );

    foreach ( $resultado as $persona ) {
        echo ( $persona -> nombre )." ".( $persona -> apellido)."<br/>";
    }
?>