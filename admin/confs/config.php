<?php 
 	$dbhost = "localhost";
 	$dbuser = "root";
 	$dbpass = "";
 	$dbname = "store";

 	$con = mysqli_connect($dbhost,$dbuser,$dbpass);
 	$result = mysqli_select_db($con,$dbname);
 	// print_r($result);
 ?>
 