<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<h2>Formulario Html - PHP </h2>
<form method="get" action="imprimir_get.php">
    <h3>Ingrese sus datos</h3>
    <label for="nombre">Nombre</label>
    <p><input type="text" name="Nombre"></p>
    <label for="edad">Edad</label>
    <p><input type="text" name="edad"></p>
    <label for="leng">Lenguaje de prog favorito</label>
    <p><input type="text" name="leng"></p>
    <input type="submit" name="submit" value="enviar">
</form>
</body>
</html>