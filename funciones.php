<?php
/*
* Funciones de PHP:
* Manejo de sesiones
* Post y Get
* Sistema de archivos
* Directorios
* Cookies
* Fecha y hora
* Cadenas
* Matematicas
*/
/*
function imprimir (){
    echo "imprimiendo desde la funcion </br>";
}

imprimir();
*/
/*
function suma($n, $m){
    return $n + $m;
}
echo suma(5, 8);
*/

function operaciones ($n,$m,$operaciones){
    if ($operaciones == "suma") {
        return $n + $m;
    }if ($operaciones== "resta") {
        return $n - $m;
    }if ($operaciones== "mult") {
        return $n * $m;
    }if ($operaciones== "division") {
        return $n / $m;}
}

echo operaciones(1,3,"resta");