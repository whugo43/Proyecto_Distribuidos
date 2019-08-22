<?php
	include("config.php");


	$salida="";	
	if (isset( $_GET['cedula'])){

		#$cedula= ( $_GET['cedula']);
		#if  (strlen($cedula)<10){
		#	$numero =10 - strlen($cedula); 

		#	$cedula = str_repeat("0", $numero). $_GET['cedula'];
		#	echo strlen($cedula);}
		$q=$mysqli -> real_escape_string($_GET['cedula']);
		$query="SELECT ritmo  FROM ritmo_cardiaco WHERE id = ".$q."";

	}

	$resultado=$mysqli->query($query);

	if($resultado->num_rows >0){

	while ($fila=$resultado->fetch_assoc()) {
		echo $fila['ritmo'];	
	}
	}else{$salida="no hay datos";}

	$mysqli->close();
?>