<?php 
	session_start();

	$name = $_POST['name'];
	$password = $_POST['password'];

	if($name == "admin" && $password == "1234"){
		$_SESSION['auth'] = true;
		header("location: ../admin/book/book-list.php");
	}
	else{
		header("location: ../admin/index.php");
	}
 ?>