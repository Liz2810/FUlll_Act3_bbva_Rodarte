<?php
	include("con_db.php");
	
	if (isset($_POST['submit'])) {
		if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1 && strlen($_POST['Correo']) && strlen($_POST['Telefono']) >= 1) {
			$nombre = trim($_POST['Nombre']);
			$apellido = trim($_POST['Apellido']);
			$correo = trim($_POST['Correo']);
			$tel = trim($_POST['Telefono']);
			$consulta = "INSERT INTO empleado(Nombre, Apellido, Correo, Telefono) VALUES ('$nombre','$apellido','$correo','$tel')";
			$resultado = mysqli_query($conex, $consulta);
			if ($resultado) {
			?>
				<h3 class="ok">¡Te has inscrito correctamente!</h3>
			<?php
			} else {
			?>
				<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
			}
		} else {
		?>
			<h3 class="bad">¡Por favor complete los campos!</h3>
		<?php
		}
	}
?>