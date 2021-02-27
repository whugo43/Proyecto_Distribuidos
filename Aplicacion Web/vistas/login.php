

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
<div class="container">  
    <div class="jumbotron">
      <h1>Toma la mejor decision</h1>      
    </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" action="../includes/validar_usuario.php" method="post">
                <fieldset>
                    
                 <legend class="text-center header">Login</legend>

                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                    	<a>username:</a>
                      <input id="username" name="username" type="text" placeholder="username" class="form-control" maxlength="10" ></input>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                    <div class="col-md-8">
                    <a>password:</a>
                      <input id="password" name="password" type="password" placeholder="password" maxlength="16" class="form-control"></input>
                    </div>
                  </div> 

                    <div class="form-group">
							        <div class="col-xs-12 col-lg-3 text-center">
                          
                            </div>
                            <div class="col-xs-12  text-center">
                                <button type="registrar" class="btn btn-primary btn-lg" href="validar_usuario.php">Login</button>
                            </div>
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