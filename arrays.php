<?php
/*
	$dias_semana = new Array();
	$dias_semana = [];   ->esto es igual que lo de arriba, pero atajando; también cuando escribimos: $numero = 5; sería el atajo de $numero = new Int(5);
*/

/* array indexado (organizado por la posición numérica):

	$dias_semana = ["lunes", "martes", "miércoles", "jueves", "viernes"];
	
	$dias_semana[1000] = "BlaBlaBla"; //crea posiciones vacías desde la 5 a la 999, y la 1000 será "BlaBlaBla"
	
	for($contador=4;$contador<=1000;$contador++){$dias_semana[$contador] = "BlaBlaBla";} //así nos rellena todas las posiciones vacías desde la 4 a la 999 con "BlaBlaBla"
	
	var_dump($dias_semana);
	
	//echo $dias_semana[1000];  //así especificamos la posición del dato que queremos que se muestre 
*/
	
	//array asociativo (se organiza en vase a una clave-valor):
	
	$dias_semana = ['primero' => "lunes", 'segundo' => "martes", 'tercero' => "miércoles", '4' => "jueves"];
	
	var_dump($dias_semana);
	
	echo $dias_semana['primero']; //así especificamos el dato que queremos que se muestre, en base a su clave (nombre)
	
?>