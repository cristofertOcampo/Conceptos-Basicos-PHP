<?php
session_start();
session_destroy();
header("Location:login.php"); //Direccionar a la locacion asignada
?>