<?php 
	include("confs/config.php");

	$name = $_POST['name'];
	$remark = $_POST['remark'];
	$sql = "INSERT INTO categories (name,remark,created_date,modified_date) VALUES ('$name','$remark',now(),now())";
	$res = mysqli_query($con,$sql);
	// print_r($res);
	header("location: cat-list.php");
 ?>	