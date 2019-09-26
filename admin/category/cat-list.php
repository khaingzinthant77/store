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
</head>
<body>
	<h1>Category List</h1>
	<?php 
		include("../confs/config.php");
		$result = mysqli_query($con,"SELECT * FROM categories");
	 ?>
	 <ul>
	 	<?php while ($row = mysqli_fetch_assoc($result)):?>
	 		<li title = "<?php echo $row['remark'] ?>">
 				<?php echo $row['name']?>
 				[<a href="cat-del.php?id=<?php echo $row['id'] ?>" class = "del">Delete</a>]
 				[<a href="cat-edit.php?id=<?php echo $row['id'] ?>" class = "edit">Edit</a>]
	 		</li>
	 	<?php endwhile; ?>
	 </ul>
	 <a href="cat-new.php" class="new">New Category</a>
</body>
</html>