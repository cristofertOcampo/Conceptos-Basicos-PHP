<?php

$url = "https://api.dailymotion.com/videos?channel=sport&limit=10"; // Identificamos la url

$opciones = array("ssl" => array("verify_peer" => false, "verify_peer_name" => false)); // Desactivar la compativilidad para que me deje leer la informacion

$respuesta = file_get_contents( $url, false, stream_context_create() ); //Leer todo el contenido y convertirlo a un string

$objRepuesta = json_decode( $respuesta );

// print_r($objRepuesta);

// foreach ( $objRepuesta->list as $video ){
//     print_r($video->title);
//     print_r($video->channel);
// }

?>

<ul>
    <?php foreach ( $objRepuesta->list as $video ){ ?>
        <li> <?php echo ($video->title); ?> | <?php echo ($video->channel); ?> </li>
    <?php } ?>
</ul>