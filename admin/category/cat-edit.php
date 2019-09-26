<?php 
	include("confs/config.php");

	$id = $_GET['id'];
	$res = mysqli_query($con,"SELECT * FROM categories WHERE id = $id");
	$row = mysqli_fetch_assoc($res);
	// print_r($row);
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
	<form action="cat-update.php" method="post" accept-charset="utf-8">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
		<label for="cat">Category Name</label>
		<input type="text" name="name" id="name" value="<?php echo $row['name'] ?>">
		<br>
		<label for="remark">Remark</label>
		<textarea name="remark" id="remark"><?php echo $row['remark']; ?></textarea>
		<br> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>