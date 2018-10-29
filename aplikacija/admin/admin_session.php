<?php
include('../connection.php');


   session_start();
   
   $admin_check = $_SESSION['login_admin'];
   
   $ses1_sql = mysqli_query($dbc,"SELECT username FROM admins where username = '$admin_check' ");
   
   $row1 = mysqli_fetch_array($ses1_sql,MYSQLI_ASSOC);
   
   $login1_session = $row['username'];
   
   if(!isset($_SESSION['login_admin'])){
      header("location:admin_login.php");
   }
?>