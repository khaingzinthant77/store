<?php 
	include("confs/config.php");
	 $id = $_POST['id'];
	 $name = $_POST['name'];
	 $remark = $_POST['remark'];
	 $sql = "UPDATE categories SET name = '$name', remark = '$remark', modified_date = now() WHERE id = $id";
	 $res = mysqli_query($con,$sql);
	 header("location: cat-list.php");
 ?>