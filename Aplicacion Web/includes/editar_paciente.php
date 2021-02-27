<?php
	include("config.php");

	//obtenemos los valores del formulario
	$cedula =$_GET['cedula'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$fecha_nacimiento = $_POST['fecha_nacimiento'];
	$enfermedad = $_POST['enfermedad'];
	
	//ingresamos la informacion a la base de datos
	mysqli_query($mysqli,"UPDATE paciente SET nombre = '$nombre', apellido = '$apellido', fecha_nacimiento='$fecha_nacimiento', enfermedad = '$enfermedad' WHERE cedula = $cedula") or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			location.href="../vistas/consulta.php";
		</script>'
?>