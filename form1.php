<?php
    $destino = "jorgejrartd@gmail.com";
    $subject = "solicitud de preguntas";
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $contenido = "nombre:" . $nombre ."\nmail" . $mail ."\nasunto" . $asunto ."\nmensaje" . $mensaje;
    mail($destino,"contacto", $contenido, $subject);
    header("location:http://dpetrona.com/");
?>