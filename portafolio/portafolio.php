<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if ($_POST) {
    print_r($_POST);
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $imagen=$_FILES['archivo']['name'];

    $objconexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objconexion->ejecutar($sql);
}

if ( $_GET ) {
    # "DELETE FROM proyectos WHERE `proyectos`.`id` = 7"
    print_r($_GET);
    
    $objconexion = new conexion();
    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$_GET['borrar'];
    $objconexion->ejecutar($sql);
}

$objconexion = new conexion();
$proyectos = $objconexion->consultar("SELECT * FROM `proyectos`");
// print_r($proyectos);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multiplart/form-data">
                        <label for="nombre">Nombre del Proyecto:</label>
                        <input class="form-control" type="text" name="nombre" id="">
                        <br>
                        <label for="archivo">Imagen del Proyecto:</label>
                        <input class="form-control" type="file" name="archivo" id="">
                        <br>
                        <h4 for="descripcion">Descripcion</h4>
                        <textarea class="form-control" name="descripcion" id="" cols="30" rows="10"></textarea>
                        <br>
                        <button class="btn btn-success" type="submit">Enviar Proyecto</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proyectos as $proyecto) { ?>
                        <tr class="">
                            <td scope="row"> <?php echo $proyecto['id']; ?> </td>
                            <td scope="row"> <?php echo $proyecto['nombre']; ?> </td>
                            <td scope="row"> <?php echo $proyecto['imagen']; ?> </td>
                            <td scope="row"> <?php echo $proyecto['descripcion']; ?> </td>
                            <td scope="row"> <a name="" class="btn btn-danger" href="?borrar <?php echo $proyecto['id']; ?>">Eliminar</a> </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>




<?php include("pie.php"); ?>