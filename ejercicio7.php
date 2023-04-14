<?php
if($_POST){
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $divicion = $valorA / $valorB;
    $multiplicacion = $valorA * $valorB;

    echo "La suma es: $suma "."<br/>"."La Resta es: $resta "."<br/>"."La divicion es: $divicion "."<br/>"."La multiplicacion es: $multiplicacion ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>

<body>
    <form action="ejercicio7.php" method="post">

        valor A:
        <input type="text" name="valorA">
        <br>

        valor B:
        <input type="text" name="valorB">
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>