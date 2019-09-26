<?php 
	include("../confs/config.php");

	$id = $_GET['id'];
	$sql = "DELETE FROM book WHERE id = $id";
	$result = mysqli_query($con,$sql);
	header("location: book-list.php");
 ?>