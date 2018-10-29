<?php
include('../conneciton.php');
      $myadmin = mysqli_real_escape_string($dbc,$_POST['username']);
      $myapw = mysqli_real_escape_string($dbc,$_POST['password']);
      if($_POST['username'] == 'admin001' && $_POST['password'] == 'adminadmin'){
		  header("location:admin.php");
	  }
else{header("location:index.php");}

?>
