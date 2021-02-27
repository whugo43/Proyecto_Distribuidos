<?php
	include("config.php");

	//obtenemos los valores del formulario
	$cedula =$_POST['cedula'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$contrasena = $_POST['cedula'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];
	$enfermedad = $_POST['enfermedad'];

	
	//ingresamos la informacion a la base de datos
	
	mysqli_query($mysqli,"INSERT INTO paciente VALUES('$cedula', '$nombre', '$apellido','$contrasena', '$fecha_nacimiento','$enfermedad')") or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			location.href="../vistas/dashboard_empleado.php";
		</script>'
?>