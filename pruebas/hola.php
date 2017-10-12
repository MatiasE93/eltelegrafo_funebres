<!DOCTYPE html>
<html>
    <head>
        <title>Prueba de PHP</title>
    </head>
    <body>
        <?php echo '<h1>Hola Mundo</h1>'; ?> 
        <a href="/portfolio/pruebas/phpinfo.php" style="cursor: pointer;">PHP Info</a>
        <br>
        <?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
        echo 'Está usando Mozilla Firefox.<br>';
        } else {
        echo 'Está usando otro navegador.<br>';
        } ?>
        <form action="accion.php" method="post">
            <p>Su nombre: <input type="text" name="nombre" /></p>
            <p>Su edad: <input type="text" name="edad" /></p>
            <p><input type="submit" /></p>
        </form>
    </body>
</html>