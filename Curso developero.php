<?php
    //Imprimir en pantalla
    print "esto es una cadena </br>";
    print "esto es una cadena impresa por print<br>";
    //Variables = espacio reservado en el disco
    $n      = 1; //enter0
    $altura = 1.6; //flotante
    //String
    $str  = "Esto es una cadena";
    $str2 = "Esto es otra cadena";
    print "$str<br>";
    print "$str2<br>";
    //boolean sólo dos valores posibles
    $bool  = false;
    $bool2 = true;
    //array
    $datos = ['nombre' => "Franco",
        'edad'         => "25",
        'Localidad'    => "Buenos Aires", ];
    $paises = ['Argentina', 'Brasil', 'Mexico', 'Colombia'];
    print_r($paises);
    print "<br>";
    print_r($datos);
