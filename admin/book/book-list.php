<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<h1>Book List</h1>
	<ul class="menu">
		<li><a href="book-list.php" title="">Manage Book</a></li>
		<li><a href="../category/cat-list.php" title="">Manage Categories</a></li>
		<li><a href="../../order/orders.php" title="">Manage Order</a></li>
		<li><a href="../../auth/logout.php" title="">Logout</a></li>
	</ul>
	<?php
		include("../confs/auth.php"); 
		include("../confs/config.php");


		$sql = "SELECT book.*, categories.name FROM book LEFT JOIN categories ON categories.id= book.category_id  ORDER BY book.created_date DESC ";
		$result = mysqli_query($con,$sql);
	 ?>

	 <ul class="list">
	 	<?php while($row = mysqli_fetch_assoc($result)): ?>
	 	<li>
	 		<img src="books/<?php echo $row['cover']?>" alt="" align="right" height="140">
	 		<b><?php echo $row['title'] ?></b>
	 		<i>by<?php echo $row['author'] ?></i>
	 		<small>(in <?php echo $row['name'] ?>)</small>
	 		<span><?php echo $row['price'] ?></span>
	 		<div>
	 			<?php echo $row['summary'] ?>
	 		</div>
	 		<a href="book-del.php?id=<?php echo $row['id'] ?>" title="" class="del">Delete</a>
	 		<a href="book-edit.php?id=<?php echo $row['id'] ?>" title="" class="edit">Edit</a>
	 	</li>
	 <?php endwhile; ?>
	 </ul>
	 <a href="book-new.php" title="" class="new">New Book</a>
</body>
</html>