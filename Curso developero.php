<?php
	//Imprimir en pantalla
	echo "esto es una cadena </br>";
	print ("esto es una cadena impresa por print<br>");
	//Variables = espacio reservado en el disco
	$n = 1;//enter0
	$altura = 1.6;//flotante
	//String
	$str = "Esto es una cadena";
	$str2 = "Esto es otra cadena";
	echo "$str<br>";
	echo "$str2<br>";
	//boolean sólo dos valores posibles
	$bool =false;
	$bool2=true;
	//array
	$datos = array('nombre' => "Franco",
					'edad' => "25",
					'Localidad' => "Buenos Aires");
	$paises = array('Argentina', 'Brasil', 'Mexico', 'Colombia');
	print_r($paises);
	echo "<br>";
	print_r($datos);
?>
