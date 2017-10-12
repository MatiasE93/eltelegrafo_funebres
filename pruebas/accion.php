<!DOCTYPE html>
<html>
    <head>
        <title>Prueba de PHP</title>
    </head>
    <body>
        <p>Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.</p>
        <p>Usted tiene <?php echo (int)$_POST['edad'];?> años.</p><br>
        <a href="/portfolio/pruebas/hola.php" style="cursor: pointer;">Volver</a>
    </body>
</html>