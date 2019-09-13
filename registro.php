<?php

include("db.php");

	if (!empty($_POST['Nombre']) && !empty($_POST['Correo']) && !empty($_POST['Telefono']) && !empty($_POST['Direccion']) && !empty($_POST['FN'])) {
		
	$nombre = $_POST['Nombre'];
	$correo = $_POST['Correo'];
	$telefono = $_POST['Telefono'];
	$direccion = $_POST['Direccion'];
	$fn = $_POST['FN'];

	$query = "INSERT INTO usuarios(Nombre, Correo,Telefono,Direccion,FN) VALUES ('$nombre','$correo','$telefono','$direccion','$fn')";
	$resultado = $conn -> query($query);

if ($resultado) {
		header("Location: usuarios.php");
	}
	else{
		echo "MAL";
	}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<h3>Registrar Usuario</h2>
	</header>

	

	<form action="registro.php" method="post">
		<input type="text" name="Nombre" placeholder="Nombre" required="">
		<input type="text" name="Correo" placeholder="Ingresa Email" required="">
		<input type="number" name="Telefono" placeholder="Telefono" required="">
		<input type="text" name="Direccion" placeholder="Direccion", required="">
		<input type="date" name="FN" placeholder="Fecha de Nacimiento" required="">
		<input type="submit" value="Registrar">
		
	</form>

	<a href="usuarios.php">Ver Lista de Usuarios</a><br><br>



</body>
</html>