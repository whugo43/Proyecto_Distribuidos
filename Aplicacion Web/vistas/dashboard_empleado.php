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
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
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
      <div class="col-xs-12 col-lg-6">
        <h2 id="pasciente"></h2>
        <img src="..\img\consulta.png" alt="paciente" class="rounded-circle">
        <h2 id="pasciente"></h2>
        <div id="relevancia2"></div>
        <p><a class="btn btn-primary" href="consulta.php" role="button">Pacientes</a></p>                
      </div>
  			
  		<div class="col-xs-12 col-lg-6">
  			<h2 id="pasciente"></h2>
        <img src="..\img\agregar.jfif" alt="paciente" class="rounded-circle">
        <h2 id="pasciente"></h2>
        <div id="relevancia2"></div>    
  			<p><a class="btn btn-primary" href="nuevo_paciente.php" role="button">Agregar Paciente</a></p>
      </div>
  		<!--
  		<div class="col-xs-12 col-lg-4">
        <h2 id="empleado"></h2>
        <img src="..\img\empleados.jpg" alt="empleado" class="rounded-circle">
        <h2 id="empleado"></h2>
        <div id="relevancia1"></div>
        <p><a class="btn btn-primary" href="#" role="button">Modificar Datos Personales </a></p>
      </div>
        -->
  </div>
</body>
</html>
