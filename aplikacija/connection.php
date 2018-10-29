<?php
//1. Select mysql server
$dbc = mysqli_connect('localhost','root','');
if (!$dbc) {
    die("Database connection failed: " . mysqli_error());
}

// 2. Select a database to use 
$db_selected = mysqli_select_db($dbc, "final");
if (!$db_selected) {
    die("Database selection failed: " . mysqli_error());
}

?>