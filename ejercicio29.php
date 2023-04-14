<?php

$servidor = "localhost"; //127.0.0.1
$usuario = "root";
$contrasenia = "";

try {
    
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql="SELECT * FROM `fotos`";

    $sentencia = $conexion->prepare($sql);
    $sentencia -> execute();

    $result = $sentencia->fetchAll();
    // print_r($result);

    foreach($result as $foto){
        print_r($foto['nombre']."<br/>");
    };

    echo "Conexion establecida";
    
} catch (PDOException $error) {
    echo "Conexion erronea".$error;
}

?>