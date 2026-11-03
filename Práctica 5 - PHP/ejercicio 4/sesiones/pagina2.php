<?php include("contador.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2</title>
</head>
<body>

    <h1>Página 2</h1>

    <p>
        Páginas visitadas durante esta sesión:
        <?php echo $_SESSION["paginas"]; ?>
    </p>

    <a href="pagina1.php">Volver a la página 1</a>

</body>
</html>