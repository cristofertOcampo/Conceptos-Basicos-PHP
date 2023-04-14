<?php
if($_POST){
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $divicion = $valorA / $valorB;
    $multiplicacion = $valorA * $valorB;

    echo "La suma es: $suma "."<br/>";
    echo "La Resta es: $resta "."<br/>";
    echo "La divicion es: $divicion "."<br/>";
    echo "La multiplicacion es: $multiplicacion <br/>";

    if($valorA==$valorA){
        echo "El valor de A es igual a el valor de B <br/>";

        if($valorB==4){
            echo "El valor es 4 <br/>";
        }
        if($valorA==5){
            echo "El valor es 5 <br/>";
        }
    }

    if( ($valorA==$valorB) && ($valorA==4) ){
        echo "El valor de A es igual a B y es un numero 4";
    }
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
    <form action="ejercicio10.php" method="post">

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