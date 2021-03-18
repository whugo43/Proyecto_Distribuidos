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
                <form class="form-horizontal">
                   
                 <legend class="text-center header">Paciente</legend>

                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                    	<a>Cedula:</a>
                      <?php $cedula= $_GET['cedula'];?>
                      <p id="cedula" name="cedula" type="text number" placeholder="Cedulasss" class="form-control"  minlength="10" maxlength="10"  ><?php echo $paciente['cedula'];?></p>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                    <a>Nombre:</a>
                      <p id="nombre" name="nombre" type="text" placeholder="Nombres" maxlength="16" class="form-control" ><?php echo $paciente['nombre'];?></p>
                    </div>
                  </div>
            
                 	<div class="form-group">

                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                            	<a>Apellido: </a>
                                <p id="apellido" name="apellido" type="text" placeholder="Apellidos" maxlength="16" class="form-control" ><?php echo $paciente['apellido'];?></p>
                            </div>
                	</div>
               
                    <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                            	<a>Fecha de nacimiento: </a>
                                <p id="fecha_nacimiento" name="fecha_nacimiento" type="date" placeholder="fecha_nacimiento" class="form-control"><?php echo $paciente['fecha_nacimiento'];?></p>
                            </div>
                    </div>

                    <div class="form-group">
                          <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                          <div class="col-md-8">
                          	<a> Enfermedad: </a>
                            <p class="form-control" id="enfermedad" name="enfermedad" placeholder="Enfermedad" rows="5" ><?php echo $paciente['enfermedad'];?></p>
                            </div>
                    </div>

                     <div class="form-group">
                        <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                        <div class="col-md-8">
                        	<a> Ritmo Cardiaco: </a>
                        	<p class="form-control" id="ritmo" name="ritmo" placeholder="ritmo" rows="5" ></p>
                        </div>
                    </div>                         
                </form>
            </div>
	    </div>                         
    </div>
</div>
<div name="refrescar" id="refrescar" value="Actualizar página"/></div>

<script type="text/javascript">
  $(document).ready(function(){
    setInterval(
        function(){
      var cedula=[ <?php echo $cedula;?> ];
      var html="../includes/consulta_paciente_individual.php?cedula="+ cedula;
          $('#ritmo').load(html);
        },500
      );
  });
</script>

</body>
</html>
