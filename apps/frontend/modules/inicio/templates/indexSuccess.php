<html>
    <head>
        <title>IndexSuccess</title>

    </head>
    <body>
    <h1>Este el texto del template!!</h1>
    <form action="<?php echo url_for('inicio')?>" method="post">
        Nombre:<br>
        <input type="text" name="nombre" value="Nombre">
        <br>
        Apellido:<br>
        <input type="text" name="apellido" value="Apellido">
        <br><br>
        <input type="submit" name="Enviar" value="Enviar">
    </form>

    </body>
</html>