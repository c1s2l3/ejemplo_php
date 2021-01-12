<!DOCTYPE HTML>
<html>
 <head>
	    <meta charset="UTF-8" >
		<title>Formulario</title>
	</head>
	<body>
		<form action="#" method="POST">
		<fieldset><legend>Formulario</legend>
			<div id="fila3">
				<label for="txt_nom">Nombre: </label>
				<input type="text" name="txt_nom" placeholder="Inserte Nombre">
			</div>
			<div id="fila2">
				<label for="txt_ape">Apellidos:</label>
				<input type="text" name="txt_ape" placeholder="Inserte Apellidos">
			</div>			
			<div id="fila3">
				<label for="tel">Teléfono:</label>
				<input type="text" name="tel">
			</div>
			<div id="fila3">
				<label for="mail">Email:</label>
				<input type="email" name="mail" placeholder="Inserte Email">
			</div>
			<div id="fila2">				
				<input class="btn"type="reset" value="Limpiar">
				<input class="btn" type="submit" value="Enviar">
			</div>
		</form>
		</fieldset>
	</body>
<?php

if(!(isset($_POST)) || count($_POST)<=0){
	die("El formulario no ha sido recibido");
}

$nombre = $_POST['txt_nom'];
$apellidos = $_POST['txt_ape'];
$tel = $_POST['tel'];
$email = $_POST['mail'];

$formu = ['Nombre' => $apellidos, 'Apellidos' => $apellidos, 'Teléfono'=> $tel, 'Email'=>$email];
var_dump($formu);
?>
</html>
