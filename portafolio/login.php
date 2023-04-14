<?php
session_start();
if($_POST){
    if ( ($_POST['usuario'] == "cristofert") && ($_POST['contrasenia'] == "12345") ) {
        $_SESSION['usuario'] = $_POST['usuario']; // Guardamos en una variable de session

        header("Location:index.php"); //Direccionar a la locacion asignada
    }else{
        echo "<script> alert('Usuario o Contraseña incorrecta') </script>";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <main class="container">
        <div class="row g-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Iniciar sesión
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <label for="usuario">Usuario:</label>
                            <input class="form-control" type="text" name="usuario" id="">

                            <label for="contrasenia">Contraseña</label>
                            <input class="form-control" type="password" name="contrasenia" id="">
                            <br>
                            <button class="btn btn-success" type="submit">Entrar al portafolio</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </main>

</body>

</html>