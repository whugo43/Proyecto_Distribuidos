<?php
   include('../includes/session.php');
?>
<html>
<head>
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
<button type="button"class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
  Registrar
  </button>

<!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form-horizontal" onsubmit="bar();" method="post">
        <div class="modal-body">
            
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" minlength="5" maxlength="10" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Password:</label>
                    <input type="text" class="form-control" id="password" name="password" minlength="6" maxlength="16" required>
                </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
<?php

  function bar()
  {
    echo "Existo desde el momento inmediato que comenzó el programa.\n";
  }

?>