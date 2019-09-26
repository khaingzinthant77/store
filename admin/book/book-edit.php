<?php 
	include("../confs/config.php");

	$id = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM book WHERE id = $id");
	$row = mysqli_fetch_assoc($result);
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
 	<h1>Edit Book</h1>
 	<form action="book-update.php" method="post" enctype="multipart/form-data">
 		<input type="hidden" name="id" value="<?php echo $row['id']?>">

		<label for="title">Title</label>
		<input type="text" name="title" value="<?php echo $row['title']?>">

		<label for="author">Author</label>
		<input type="text" name="author" value="<?php echo $row['author']?>">

		<label for="summary">Summary</label>
		<textarea name="summary"><?php echo $row['summary'] ?></textarea>

		<label for="price">Price</label>
		<input type="text" name="price" value="<?php echo $row['price']?>">

		<label for="category">Category_id</label>
		<select name="category" id="category">
			<option value="0">Choose</option>
			<?php 
				$result = mysqli_query($con,"SELECT id,name FROM categories");
				while($cat = mysqli_fetch_assoc($result)):
			 ?>
			 <option value="<?php echo $cat['id'] ?>"
			  <?php 
			 	if($cat['id'] == $row['category_id'])
			 		echo "Selected";
			  ?>
			 >
			 <?php echo $cat['name'] ?>	
			 </option>
			 <?php endwhile; ?>
		</select>

		<br><br>
		<img src="books/<?php echo $row['cover']?>" alt="" height = "150">
		<label for="cover">Change Cover</label>
		<input type="file" name="cover" id="cover">

		<br><br>
		<input type="submit" value="Update Book">
		<a href="book-list.php" title="">Back</a>
 	</form>
 </body>
 </html>