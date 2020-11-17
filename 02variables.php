<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>02Variables</title>
</head>

<body>
	<?php
    //Variable Numerica
    $numero = 5;
    print "Esto es una variable Numero: $numero <br>";
    var_dump($numero);
    //Variable Texto
    $palabra = "palabra";
    print "<br>Esta es una variable palabra: $palabra <br>";

    //Variable Booleana
    $booleana = true;
    print "Esto es una variable Booleana: $booleana <br>";

    //Variable Arreglo
    $Colores = ["rojo", "amarillo"];
    print "Esto es una variable arreglo: $Colores[0]<br>";
    print "Esto es una variable arreglo: $Colores[1]<br>";

    //Variable Arreglo con Propiedades
    $verduras = ['verdura1' => 'lechuga', 'verdura2' => 'cebolla'];
    print "Esto es una variable arreglo con propiedades: $verduras[verdura2] <br>";

    //Variable Objeto
    $frutas = (object)['fruta1' => 'pera', 'fruta2' => 'manzana'];
    print "Esto es una variable objeto: $frutas->fruta1 <br>";

    ?>
</body>
</html>
