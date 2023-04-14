<?php

session_start();

$_SESSION["usuario"] = "cristofert";
$_SESSION["status"] = "logueado";

echo "Sesion iniciada"."<br/>";
echo "Usuario: ".$_SESSION["usuario"].":<br/>"."Estatus: ".$_SESSION["status"];


?>