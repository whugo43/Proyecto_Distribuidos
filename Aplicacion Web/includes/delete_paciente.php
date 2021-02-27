<?php
	include("config.php");

	//obtenemos los valores del formulario
	$cedula =$_GET['cedula'];
	

	
	//ingresamos la informacion a la base de datos
	
	mysqli_query($mysqli,"DELETE FROM paciente WHERE cedula = '$cedula'") or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			location.href="../vistas/consulta.php";
		</script>'
?>