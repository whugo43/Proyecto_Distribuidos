<?php
   include('../includes/session.php');
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Pagina oficial de Sweet  &amp Coffe">
  <meta name="author" content="Wong Hugo">
  <link rel="icon" href="../../favicon.ico">
  <title>Toma la decision</title> 

  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  

  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="jumbotron.css" rel="stylesheet">
  <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  
   <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./index.js"></script>
</head>
<body>
<?php
// do php stuff
readfile('menu.php');
?>


	<div class="container">
		<h2>Servicios en línea</h2>         
	</div>
	<div class="form-1-2 container">
		<label for="caja_busqueda">Search :</label>
		<input type="text" class="form-control" name="caja_busqueda" placeholder="Search"id="caja_busqueda">
	</div>
	<div id= "datos" class="container">
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="../script/consulta.js"></script>
  
 

</body>
</html>
