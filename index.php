<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<form method="post">
		<h1>Empleados</h1>
		<input type="text" name="Nombre" placeholder="Nombres">
		<input type="text" name="Apellido" placeholder="Apellidos">
		<input type="text" name="Correo" placeholder="Correo">
		<input type="number" name="Telefono" placeholder="Telefono">
		<input type="submit" name="submit">
	</form>
	<?php
	include("empleado.php");
	?>
</body>
</html>