<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>

    <h1>Contacto</h1>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $consulta = $_POST["consulta"];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $destinatario = "webmaster@example.com";
            $asunto = "Consulta desde el sitio";

            $cuerpo = "Nombre: $nombre\r\n";
            $cuerpo .= "Correo: $email\r\n";
            $cuerpo .= "Consulta: $consulta";

            $cabeceras = "From: webmaster@example.com\r\n";
            $cabeceras .= "Reply-To: $email\r\n";
            $cabeceras .= "MIME-Version: 1.0\r\n";
            $cabeceras .= "Content-Type: text/plain; charset=UTF-8\r\n";

            if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
                echo "<p>La consulta fue aceptada para enviar.</p>";
            } else {
                echo "<p>No se pudo enviar la consulta.</p>";
            }

        } else {
            echo "<p>Ingresá un correo válido.</p>";
        }
    }

    ?>

    <form action="contacto.php" method="post">

        <label>
            Nombre:
            <input type="text" name="nombre" required>
        </label>

        <br><br>

        <label>
            Correo:
            <input type="email" name="email" required>
        </label>

        <br><br>

        <label>
            Consulta:
            <br>
            <textarea name="consulta" rows="5" cols="30" required></textarea>
        </label>

        <br><br>

        <input type="submit" value="Enviar consulta">

    </form>

</body>
</html>