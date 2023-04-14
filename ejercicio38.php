<?php

$archivo = "contenido.txt"; // Tenemos el archivo

$archivoAbierto = fopen($archivo, "r"); // Abrimos el archivo modo lectura

$contenido = fread( $archivoAbierto, filesize($archivo) ); // Leemos el archivo modo lectura

echo $contenido; // Imprimir el archivo

?>