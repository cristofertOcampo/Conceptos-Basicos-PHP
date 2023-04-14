<?php

$txtNombre = "";
$rdgLenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$lsAnime = "";

$txtComentario = "";

if ($_POST) {
    $txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
    $rdgLenguaje = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : "";
    $chkphp = (isset($_POST["chkphp"]) == "si") ? "checked" : "";
    $chkhtml = (isset($_POST["chkhtml"]) == "si") ? "checked" : "";
    $chkcss = (isset($_POST["chkcss"]) == "si") ? "checked" : "";
    $lsAnime = (isset($_POST["lsAnime"])) ? $_POST["lsAnime"] : "";
    $txtComentario(isset($_POST["txtComentario"])) ? $_POST["txtComentario"] : "";
    // Instrucción de insetar
    // Rutina de algun calculo
    // Podemnos alterar esos valores para mostrar diferentes valores
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <?php if ($_POST) { ?>
        <p><strong>Hola</strong>: <?php echo $txtNombre; ?></p>
        <br>
        <p><strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje; ?></p>
        <br>
        <p><strong>Estas aprendiendo: </strong>
            - <?php echo ($chkphp) == "checked" ? "PHP" : ""; ?> <br>
            - <?php echo ($chkhtml) == "checked" ? "HTML" : ""; ?> <br>
            - <?php echo ($chkcss) == "checked" ? "CSS" : ""; ?> <br>
        </p>
        <br>
        <p><strong>Tu Anime es: </strong><?php echo $lsAnime; ?></p>
        <br>
        <p><strong>Tu mensaje es: </strong>: <?php echo $txtComentario; ?></p>
    <?php } ?>

    <form action="ejercicio31.php" method="post">
        <label for="txtNombre">Nombre:</label>
        <br>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br>
        <h4>¿Te gusta?</h4>
        <br>php: <input type="radio" <?php echo ($rdgLenguaje) == "php" ? "checked" : ""; ?> name="lenguaje" value="php" id="">
        <br>html: <input type="radio" <?php echo ($rdgLenguaje) == "html" ? "checked" : ""; ?> name="lenguaje" value="html" id="">
        <br>css: <input type="radio" <?php echo ($rdgLenguaje) == "css" ? "checked" : ""; ?> name="lenguaje" value="css" id="">
        <br>

        <h4>Estas aprendiendo...</h4>
        <br>php: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br>html: <input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        <br>css: <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">
        <br>

        <h4>Que anime te gusta?...</h4>
        <select name="lsAnime" id="">
            <option value="">[Ninguna serie]</option>
            <option value="naruto" <?php echo ($lsAnime == "naruto") ? "select" : ""; ?>>Naruto</option>
            <option value="bleach" <?php echo ($lsAnime == "bleach") ? "select" : ""; ?>>Bleach</option>
            <option value="dragon" <?php echo ($lsAnime == "dragon") ? "select" : ""; ?>>Dragon Ball</option>
        </select>
        <br>

        <h4>Tienes alguna duda?</h4>
        <textarea name="txtComentario" id="" cols="30" rows="10"><?php echo $txtComentario; ?></textarea>

        <input type="submit" value="Enviar informcion">
    </form>

</body>

</html>