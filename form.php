<?php
    $destino = "jorgejrartd@gmail.com";
    $subject = "solicitud de preguntas";
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $asunto = $_POST["asunto"];
    $asunto = $_POST["asunto"];
    $contenido = "nombre:" . $nombre ."\nmail:" . $mail . "\nasunto:"  . $asunto  . ;
    mail($destino,"contacto", $contenido, $subject);
    header("location:http://trihu.com/index.html");
    ?>