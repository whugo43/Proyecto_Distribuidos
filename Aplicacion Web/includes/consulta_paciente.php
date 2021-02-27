<?php
	include("config.php");

	$salida="";
	$query="SELECT cedula, nombre, apellido, fecha_nacimiento, enfermedad FROM paciente";
	if (isset($_POST['consulta'])){
		$q=$mysqli -> real_escape_string($_POST['consulta']);
		$query="SELECT cedula, nombre, apellido, fecha_nacimiento, enfermedad FROM paciente WHERE cedula LIKE '%".$q."%' OR  nombre LIKE '%".$q."%' OR  apellido LIKE '%".$q."%'";
	}
	$resultado=$mysqli->query($query);
	if($resultado->num_rows >0){
		$salida.="<table class='tabla_datos table table-striped'>
					<thead>
						<tr>
						<th scope='col'> cedula</th>
						<th scope='col'> nombre</th>
						<th scope='col'> apellido</th>
						<th scope='col'> fecha de nacimiento</th>
						<th scope='col'> seleccionar</th>
						<th scope='col'> editar</th>
						<th scope='col'> eliminar</th>
						</tr>
					</thead>
					<tbody>";
		echo $salida;

	while ($fila=$resultado->fetch_assoc()) {

		echo "<tr>";
			echo	"<td>".$fila['cedula']."</td>";
			echo	"<td>".$fila['nombre']."</td>";
			echo	"<td>".$fila['apellido']."</td>";
			echo	"<td>".$fila['fecha_nacimiento']."</td>";
			$cedula=$fila['cedula'];$nombre= str_replace(' ','_',$cedula);
			$nombre=$fila['nombre'];$nombre= str_replace(' ','_',$nombre);
			$apellido=$fila['apellido'];$apellido= str_replace(' ','_',$apellido);
			$fecha_nacimiento=$fila['fecha_nacimiento'];
			$enfermedad=$fila['enfermedad'];$enfermedad= str_replace(' ','_',$enfermedad);

			echo	"<td><a href=consulta_individual.php?cedula=".$cedula.">seleccionar</td>";
			echo	"<td><a href=editar_individual.php?cedula=".$cedula.">editar</td>";
			echo	"<td><a href=../includes/delete_paciente.php?cedula=".$cedula.">eliminar</td>";

		echo"</tr>";
	}
	echo "</tbody></table>";

	}else{
		echo "No hay datos";
	}
	
	$mysqli->close();
?>