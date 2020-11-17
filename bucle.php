<?php
//bucle, loop, ciclo: instruccion que ejecuta codigo n veces.

//objetivo: imprimir del 0 al 100;

//while

$i = 0;
while ($i <= 100) {
    echo $i, ' - ';
    $i++; //$i = $n + 1
}
print "<br>";

$m = 10;
do {
    echo $m, ' - ';
    $m++; //$m = $m + 1
} while ($m <= 100);

print "<br>";
for ($b = 0; $b < 100; $b++) {
    echo $b, ' - ';
}
echo $b,"<br>";

$n = 1;
while ($n <= 10) {
    print "tablas del $n <br>";
    $m = 1;
    while ($m <= 10) {
        echo "$n * $m = ", $m * $n;
        print "<br>";
        $m++;
    }
    $n++;
}
/*
Imprimir los numeros pares del 0 al 50.
Imprimir los numeros impares del 0 al 50.
Imprimir las potencias del 2, hasta la decima potencia.
 */

$j = 0;
for ($j = 0; $j <= 50; $j += 2) {
    echo "Los numeros pares son: ", $j, "<br>";
}

$f = 1;
for ($f = 1; $f <= 50; $f += 2) {
    echo "Los numeros impares son: ", $f, "<br>";
}

$x = 2;
$p = 0;
    for ($p = 0; $p <= 10; $p++) {
        echo $x ," elevado a la ", $p, " es: ", $x ** $p, "<br>";
    }
