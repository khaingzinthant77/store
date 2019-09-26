<?php 
include("../confs/auth.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		form label{
			display: block;
			margin-top: 8px;
		}
	</style>
</head>
<body>
	<h1>New Category</h1>
	<form action="cat-add.php" method="post" accept-charset="utf-8">
		<label for="cat">Category Name</label>
		<input type="text" name="name" id="name">
		<br>
		<label for="remark">Remark</label>
		<textarea name="remark" id="remark"></textarea>
		<br> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>