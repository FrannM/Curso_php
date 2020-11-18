<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
    //Funciones para strings
    $mensaje = "Hoy voy a probar cosas nuevas";

    //longitud
    echo strlen($mensaje) . "<br>";

    //Numero de palabras
    echo str_word_count($mensaje) . "<br>";

    //Reversa

    echo strrev($mensaje) . "<br>";

    //Encontrar texto
    echo strpos($mensaje, "probar") . "<br>";

    //Reemplazar texto
    echo str_replace("probar", "nadar", $mensaje) . "<br>";

    //Convertir a minúsculas
    echo strtolower($mensaje) . "<br>";

    //Convertir a mayúsculas
    echo strtoupper($mensaje) . "<br>";

    //Comparar cadenas
    echo strcmp("a","a") . "<br>";

    //Substraer cadena
    echo substr($mensaje, 10) . "<br>";

    //Remover espacios en blanco
    echo trim("hola         estoy           removiendo         los espacios       que         sobran");

?>
</body>
</html>
