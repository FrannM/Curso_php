<?php
/*
>
<
>=
<=
==
=== si es mismo valor y mismo tipo de variable
!= diferente a ....
*/
/*
Dada una edad, saber si es bebe, niño. adolescente o adulto.
bebe < 2, niño 3 - 12, adolescente 13 - 17, y adulto 18 ....n
*/
$edad = 25;
if ($edad <= 2) {
    echo "que bonito bebe";
}elseif ($edad <= 12) {
        echo "es niño";
}elseif ($edad <= 17) {
    echo "es adolescente";
}elseif ($edad >=18) {
    echo "es adulto";
}
echo "<br>";
$dia = 5;
switch ($dia) {
    case '1':
        echo "Es Lunes";
        break;
    case '2':
        echo "Es Martes";
        break;
    case '3':
        echo "Es Miercoles";
        break;
    case '4':
        echo "Es Jueves";
        break;
    case '5':
        echo "Es Viernes";
        break;
    case '6':
        echo "Es Sabado";
        break;
    default:
    echo "Es Domingo";
        break;
}

echo "<br>";
/*
Determinar si un numero dado es negativo, cero o positivo.
Toma en cuenta que los negativos se declaran asi: -2

Determinar con Switch si dado un numero, que mes corresponde del año y si da un valor diferente entre 1 y 12, marcar que el valor esta fuera del rango.
*/

$numero = 0;
if ($numero < 0) {
    echo "el numero es negativo";
}elseif ($numero == 0) {
    echo "el numero es cero";
}elseif ($numero > 0) {
    echo "el numero es positivo";
}
echo "<br>";
$mes = 1;
switch ($mes) {
    case '1':
        echo "Enero";
        break;
    case '2':
        echo "Febrero";
        break;
    case '3':
        echo "Marzo";
        break;
    case '4':
        echo "Abril";
        break;
    case '5':
        echo "Mayo";
        break;
    case '6':
        echo "Junio";
        break;
    case '7':
        echo "Julio";
        break;
    case '8':
        echo "Agosto";
        break;
    case '9':
        echo "Septiembre";
        break;
    case '10':
        echo "Octubre";
        break;
    case '11':
        echo "Noviembre";
        break;
    case '12':
        echo "Diciembre";
        break;
    default:
    echo "Valor fuera de rango";
        break;
}


?>