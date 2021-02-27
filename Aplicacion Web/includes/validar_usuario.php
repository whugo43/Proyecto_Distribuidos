<?php
   include("config.php");
   session_start();
    
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername =$_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT id FROM dcotr WHERE username = '$myusername' and passcode = '$mypassword'";
      $result=$mysqli->query($sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($result->num_rows >0) {
         $_SESSION['username']= "username";
         $_SESSION['login_user'] = $myusername;
         
         header("location: ../vistas/dashboard_empleado.php");
      }else {
         echo '<script type="text/javascript">
         alert("Su usuario o contraseña son invalido")
    window.location.href="../vistas/login.php";
    </script>';
       
       
      }
   }
?>