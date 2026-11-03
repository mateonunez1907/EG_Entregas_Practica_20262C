<?php include("contador.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 1</title>
</head>
<body>

    <h1>Página 1</h1>

    <p>
        Páginas visitadas durante esta sesión:
        <?php echo $_SESSION["paginas"]; ?>
    </p>

    <a href="pagina2.php">Ir a la página 2</a>

</body>
</html>