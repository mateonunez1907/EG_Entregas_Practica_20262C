<?php

$destinatario = "mateonunez.edu@gmail.com";
$remitente = "mateotrd1@gmail.com";

$asunto = "Prueba de correo HTML";
$cuerpo = "<h1>Hola</h1><p>Este es un correo con formato <b>HTML</b>.</p>";

$cabeceras = "From: " . $remitente . "\r\n";
$cabeceras .= "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";

if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
    echo "El servidor aceptó el correo para enviarlo.";
} else {
    echo "No se pudo enviar el correo.";
}