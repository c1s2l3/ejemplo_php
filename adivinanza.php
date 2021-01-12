<?php

$numeroUsuario = $_GET['numero'];  //escribimos el número en el navegador: adivinanza.php?numero
$numeroOrdenador = random_int (0, 10);  //número aleatorio entre el 0 y el 10

if ($numeroUsuario == $numeroOrdenador {
	echo '<h1 style="color: green;">¡Felicidades!</h1>';
	echo "¡Felicidades!";
}else{
	echo "Maal";
}


?>