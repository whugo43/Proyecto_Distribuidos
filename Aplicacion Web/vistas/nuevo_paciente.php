<?php
   include('../includes/session.php');
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Pagina oficial de Sweet  &amp Coffe">
  <meta name="author" content="Wong Hugo">
  <link rel="icon" href="../../favicon.ico">
  <title>Toma la Desicion</title> 

  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="jumbotron.css" rel="stylesheet">
  <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  
</head>
<body>
<?php
// do php stuff
readfile('menu.php');
?>
 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="../includes/agregar_paciente.php" method="post">
                    <fieldset>
                        <legend class="text-center header">Nuevo Paciente</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="cedula" name="cedula" type="number" placeholder="Cedula" class="form-control"  minlength="10" maxlength="10" >
                            </div>
                        </div>
						
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="nombre" name="nombre" type="text" placeholder="Nombres" maxlength="16" class="form-control">
                            </div>
                        </div>
						
						<div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="apellido" name="apellido" type="text" placeholder="Apellidos" maxlength="16" class="form-control">
                            </div>
                        </div>
               
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" placeholder="fecha_nacimiento" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="enfermedad" name="enfermedad" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
							<div class="col-xs-12 col-lg-3 text-center">
                              
                            </div>
							
                            <div class="col-xs-12 col-lg-3 text-center">
                                <button type="registrar" class="btn btn-primary btn-lg" href="agregar_paciente.php">registrar</button>
                            </div>
                        
                            <div class="col-xs-12 col-lg-3 text-center">
							 <p><a class="btn btn-primary regresar" href="dashboard_empleado.php" role="button">regresar</a></p>           
            </div>
                                </div>
							
							 <div class="col-xs-12 col-lg-3 text-center">
                               
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
  



</body>
</html>
