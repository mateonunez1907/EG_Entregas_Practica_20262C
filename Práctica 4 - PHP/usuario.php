<?php

function comprobar_nombre_usuario($nombre_usuario) {

    // Comprobar la longitud.
    if (strlen($nombre_usuario) < 3 || strlen($nombre_usuario) > 20) {
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }

    // Comprobar los caracteres.
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";

    for ($i = 0; $i < strlen($nombre_usuario); $i++) {

        if (strpos($permitidos, substr($nombre_usuario, $i, 1)) === false) {
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }

    echo $nombre_usuario . " es válido<br>";
    return true;
}

// Probar un nombre válido.
comprobar_nombre_usuario("mateo_1907");

// Probar un nombre demasiado corto.
comprobar_nombre_usuario("ab");

// Probar un nombre demasiado largo.
comprobar_nombre_usuario("abcdefghijklmnopqrstu");

// Probar un carácter no permitido.
comprobar_nombre_usuario("mateo@");

?>