<?php
/**
 * >
 * <
 * >=
 * <=
 * ==
 * === si es mismo valor y mismo tipo de variable
 * != diferente a ....
 */

/*
Dada una edad, saber si es bebe, niño. adolescente o adulto.
bebe < 2, niño 3 - 12, adolescente 13 - 17, y adulto 18 ....n
 */
$edad = 25;
if ($edad <= 2) {
    print "que bonito bebe";
} elseif ($edad <= 12) {
    print "es niño";
} elseif ($edad <= 17) {
    print "es adolescente";
} elseif ($edad >= 18) {
    print "es adulto";
}
print "<br>";
$dia = 5;
switch ($dia) {
    case '1':
        print "Es Lunes";
        break;
    case '2':
        print "Es Martes";
        break;
    case '3':
        print "Es Miercoles";
        break;
    case '4':
        print "Es Jueves";
        break;
    case '5':
        print "Es Viernes";
        break;
    case '6':
        print "Es Sabado";
        break;
    default:
    print "Es Domingo";
        break;
}

print "<br>";
/*
Determinar si un numero dado es negativo, cero o positivo.
Toma en cuenta que los negativos se declaran asi: -2

Determinar con Switch si dado un numero, que mes corresponde del año y si da un valor diferente entre 1 y 12, marcar que el valor esta fuera del rango.
 */

$numero = 0;
if ($numero < 0) {
    print "el numero es negativo";
} elseif ($numero == 0) {
    print "el numero es cero";
} elseif ($numero > 0) {
    print "el numero es positivo";
}
print "<br>";
$mes = 1;
switch ($mes) {
    case '1':
        print "Enero";
        break;
    case '2':
        print "Febrero";
        break;
    case '3':
        print "Marzo";
        break;
    case '4':
        print "Abril";
        break;
    case '5':
        print "Mayo";
        break;
    case '6':
        print "Junio";
        break;
    case '7':
        print "Julio";
        break;
    case '8':
        print "Agosto";
        break;
    case '9':
        print "Septiembre";
        break;
    case '10':
        print "Octubre";
        break;
    case '11':
        print "Noviembre";
        break;
    case '12':
        print "Diciembre";
        break;
    default:
    print "Valor fuera de rango";
        break;
}
