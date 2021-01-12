<?php

$conexion = new mysqli("localhost", "root", "", "sakila");


$codigo = $_GET['codPeli'];
$consulta = "SELECT * FROM film WHERE film_id = '$codigo'";
$resultado = $conexion->query($consulta);

while($registro = mysqli_fetch_object($resultado)){
	echo "<h1>Título: ".$registro->title."</h1>";
	echo "<p>Código: ".$registro->film_id."</p>";
	echo "<p>Descripción: ".$registro->description."</p>";
	echo "<p>Año: ".$registro->release_year."</p>";
}

 ?>