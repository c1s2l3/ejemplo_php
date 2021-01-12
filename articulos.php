<?php

$conexion = new mysqli("localhost", "root", "", "jardineria");


$codigo = $_GET['codigo'];
$consulta = "SELECT * FROM productos WHERE CodigoProducto = '$codigo'";
$resultado = $conexion->query($consulta);

while($registro = mysqli_fetch_object($resultado)){
	echo "<h1>Nombre Producto: ".$registro->Nombre."</h1>";
	echo "<p>Gama: ".$registro->Gama."</p>";
	echo "<p>Dimensiones: ".$registro->Dimensiones."</p>";
	echo "<p>Proveedor: ".$registro->Proveedor."</p>";
	echo "<p>Descripcion: ".$registro->Descripcion."</p>";
	echo "<p>CantidadEnStock: ".$registro->CantidadEnStock."</p>";
	echo "<p>PrecioVenta: ".$registro->PrecioVenta."</p>";
	echo "<p>PrecioProveedor: ".$registro->PrecioProveedor."</p>";
}

//para ver los resultados escribimos en el navegador : https://ejemplo_php.local/articulos.php?codigo=11679 (el que sea)

 ?>