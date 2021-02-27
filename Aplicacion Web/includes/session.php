<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $sql = "select username from dcotr where username = '$user_check' ";
   $result=$mysqli->query($sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>