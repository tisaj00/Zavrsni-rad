<?php
include('../conneciton.php');
      $mydriver = mysqli_real_escape_string($dbc,$_POST['username']);
      $mydpw = mysqli_real_escape_string($dbc,$_POST['password']);
      if($_POST['username'] == 'driver001' && $_POST['password'] == 'driver1' || $_POST['username'] == 'driver002' && $_POST['password'] == 'driver2'){
		  header("location:driver.php");
	  }
else{header("location:../index.php");}

?>
