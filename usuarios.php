<!DOCTYPE html>
<html>
<head>
	<title>Usuarios</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<center>
	<header>
		<a href="registro.php">Agregar Nuevo Usuario</a>
	</header>


	<table border="3">
		<thead>
			<tr>
				
				<th colspan="7">Lista de Usuarios</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nombre</td>
				<td>Correo</td>
				<td>Telefono</td>
				<td>Direccion</td>
				<td>F. Nacimiento</td>
				
			</tr>

			<?php 

			include('db.php');
			$query = "SELECT * FROM usuarios";
			$resultado = $conn -> query($query);
			while ($fila=$resultado->fetch(PDO::FETCH_ASSOC) ) {
			 ?>


			 <tr>
			 	<td><?php echo $fila['Nombre']; ?></td>
			 	<td><?php echo $fila['Correo']; ?></td>
			 	<td><?php echo $fila['Telefono']; ?></td>
			 	<td><?php echo $fila['Direccion']; ?></td>
			 	<td><?php echo $fila['FN']; ?></td>

			 	<td><a href="eliminar.php?Nombre=<?php echo $fila['Nombre']; ?>">Eliminar</a></td>

			 </tr>


			 <?php 

			 }

			  ?>

		</tbody>
	</table>

</center>
</body>
</html>