<?php
   include('../includes/session.php');
   $cedula =$_GET['cedula'];
   $sql = "call GetPaciente($cedula)";
      $result=$mysqli->query($sql);
       $paciente=$result->fetch_assoc()
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Pagina oficial de Sweet  &amp Coffe">
  <meta name="author" content="Wong Hugo">
  <link rel="icon" href="../../favicon.ico">
  <title>Toma la decision</title> 

  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="jumbotron.css" rel="stylesheet">
  <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
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
                <form class="form-horizontal" action="../includes/editar_paciente.php?cedula='<?php echo $_GET['cedula'];?>'" method="post">
                <fieldset>
                    
                 <legend class="text-center header">Paciente</legend>

                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                    	<a>Cedula:</a>
                      <input disabled  id="cedula" name="cedula" type="number" placeholder="Cedula" class="form-control"  minlength="10" maxlength="10"  value='<?php echo  $paciente['cedula'];?>'></input>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                    <a>Nombre:</a>
                      <input id="nombre" name="nombre" type="text" placeholder="Nombres" maxlength="16" class="form-control" value='<?php echo  $paciente['nombre'];?>'></input>
                    </div>
                  </div>
            
                 	<div class="form-group">

                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                            	<a>Apellido: </a>
                                <input id="apellido" name="apellido" type="text" placeholder="Apellidos" maxlength="16" class="form-control" value='<?php echo  $paciente['apellido'];?>'></input>
                            </div>
                	</div>
               
                    <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                            	<a>Fecha de nacimiento: </a>
                                <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" placeholder="fecha_nacimiento" class="form-control"value='<?php echo  $paciente['fecha_nacimiento'];?>'></input>
                            </div>
                    </div>

                    <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                          <div class="col-md-8">
                          	<a> Enfermedad: </a>
                            <input class="form-control" id="enfermedad" name="enfermedad" placeholder="Enfermedad" rows="5" value='<?php echo  $paciente['enfermedad'];?>'></input>
                            </div>
                    </div>

                    <div class="form-group">
							<div class="col-xs-12 col-lg-3 text-center">
                              
                            </div>
							
                            <div class="col-xs-12 col-lg-3 text-center">
                                <button type="registrar" class="btn btn-primary btn-lg" href="editar_paciente.php">Actualizar</button>
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
