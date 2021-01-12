
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="UTF-8" >
		<title>Selector Película</title>
		<meta name="author" content="Carolina Suárez">
		<meta name="description" content="Página que contiene Selector Película">
		<meta name="keywords" content="formulario, html, mysql">
		
		<!-- RESPONSIVE DESIGN -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		
	</head>
	<body><h2>Selector Película</h2>
		<form action="peli.php" method="GET">
			<div id="fila1">
				<label for="codPeli">Código Película: </label>
				<input type="text" name="codPeli" required="required">
			<div id="fila2">				
				<input type="submit" value="Enviar">
			</div>
		</form>
	</body>
</html>


