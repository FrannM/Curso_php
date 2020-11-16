<?php
//bucle, loop, ciclo: instruccion que ejecuta codigo n veces.

//objetivo: imprimir del 0 al 100;

//while
/*
$n = 0;
while ($n <= 100) {
    echo $n, ' - ';
    $n++; //$n = $n + 1
}
echo "<br>";
*/
/*
$n = 10;
do {
    echo $n, ' - ';
    $n++; //$n = $n + 1
} while ($n <= 100);
*/
/*
echo "<br>";
for ($i=0; $i < 100 ; $i++) {
    echo $i, ' - ';
}
*/
/*
$n=1;
while ($n <= 10) {
    echo "tablas del $n </br>";
    $m=1;
    while ($m <= 10) {
        echo "$n * $m = ", $m * $n;
        echo "</br>";
        $m++;
    }
    $n++;
}
*/

/*
Imprimir los numeros pares del 0 al 50.
Imprimir los numeros impares del 0 al 50.
Imprimir las potencias del 2, hasta la decima potencia.
*/
/*
$n=0;
for ($n=0; $n<=50 ; $n+=2) {
    echo "Los numeros pares son: ", $n, "</br>";
}
*/
/*
$n=1;
for ($n = 1; $n <= 50; $n += 2) {
    echo "Los numeros impares son: ", $n, "</br>";
}
*/
$n=2;
$p=0;
    for ($p=0; $p<=10 ; $p++) {
    echo $n ," elevado a la ", $p, " es: ", $n ** $p, "</br>";
    }

?>