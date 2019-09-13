<?php

include("db.php");

	$nombre=$_REQUEST['Nombre'];
	
	$query = "DELETE FROM usuarios WHERE Nombre='$nombre'";
	$resultado = $conn -> query($query);

if ($resultado) {
		header("Location: usuarios.php");
	}
	else{
		echo "MAL";
	}
	

?>