<?php
$matriz = ["pontevedra", "ourense", "coruña", "lugo"];

array_push($matriz, "ponferrada");  //añade un valor al final: array_push($nombreArray, "valor");

array_unshift($matriz, "granada", "oporto"); //añade elementos al principio del array 

array_pop($matriz);  //elimina el último elemento de una matriz

array_shift($matriz); //elimina el primer elemento de una matriz

//Recuento de elementos que posee el array -> Función COUNT

echo count($matriz);

var_dump($matriz);

echo "<br/>"; //salto de línea

//Ordenar elementos según el valor -> Función SORT. Hay más, ver en https://www.php.net/manual/es/function.sort.php  

sort($matriz);  //ordenamos la matriz; para leela no vale un simple echo, hay que contarlos uno a uno

for($contador=0; $contador<4; $contador++){   //bucle para leer los elementos del array
	echo $matriz[$contador].", ";
}

?>