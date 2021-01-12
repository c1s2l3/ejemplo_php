<!DOCTYPE html>
<html>
<head>
   <title>Tablas de multiplicar.</title> 
</head>
<body>
<h1>Tablas de multiplicar</h1>
<h3>Escribe un número del 1 al 10 y yo te diré la tabla de multiplicar.</h3>
<form action="#" method="get">
   <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Ver tabla de multiplicar." /></p>
</form>
<?php 
$valor = $_GET['num'];

echo "<h4>Tabla del $valor:</h4>";

for ($contador=1; $contador<=10; $contador++){
	
	echo "$contador x $valor = ".$contador * $valor."<br />";
}
?>
</body>
</html>
