<?php 
	include("confs/config.php");
	$id = $_GET['id'];
	$sql = "DELETE FROM categories WHERE id = $id";
	mysqli_query($con,$sql);
	header("location: cat-list.php");
 ?>