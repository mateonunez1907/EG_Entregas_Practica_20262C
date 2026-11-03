<?php

$sitio = "https://wordle.global/es";
$remitente = "mateotrd1@gmail.com";
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amigo = trim($_POST["amigo"] ?? "");

    if (filter_var($amigo, FILTER_VALIDATE_EMAIL)) {
        $asunto = "Te recomiendo este sitio";
        $cuerpo = "Te recomiendo visitar este sitio: " . $sitio;
        $cabeceras = "From: " . $remitente . "\r\n";

        if (mail($amigo, $asunto, $cuerpo, $cabeceras)) {
            $resultado = "El servidor aceptó la recomendación para enviarla.";
        } else {
            $resultado = "No se pudo enviar la recomendación.";
        }
    } else {
        $resultado = "Ingresá un correo válido.";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recomendar el sitio</title>
</head>
<body>
    <h1>Recomendar el sitio a un amigo</h1>

    <form action="recomendar.php" method="post">
        <label>
            Correo de tu amigo:
            <input type="email" name="amigo" required>
        </label>

        <button type="submit">Recomendar</button>
    </form>

    <p><?php echo $resultado; ?></p>
</body>
</html>