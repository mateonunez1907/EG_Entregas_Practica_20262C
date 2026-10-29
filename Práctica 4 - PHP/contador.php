<?php

$archivo = "contador.dat";

// Leer el contador.
$abrir = fopen($archivo, "r");
$cont = fread($abrir, filesize($archivo));
fclose($abrir);

// Aumentar y guardar el contador.
$abrir = fopen($archivo, "w");
$cont = $cont + 1;
$guardar = fwrite($abrir, $cont);
fclose($abrir);

// Mostrar el resultado.
echo "<font face='arial' size='3'>Cantidad de visitas:" . $cont . "</font>";

?>