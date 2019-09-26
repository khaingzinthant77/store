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
			margin: 8px;
		}
	</style>
</head>
<body>
	<form action="book-add.php" method="post" enctype="multipart/form-data">
		<label for="title">Book Title</label>
		<input type="text" name="title" id="title">

		<label for="author">Author</label>
		<input type="text" name="author" id="author">

		<label for="summery">Summery</label>
		<textarea name="summary"></textarea>

		<label for="price">Price</label>
		<input type="text" name="price">

		<label for="category">Category</label>
		<select name="category">
			<option value="0">Choose</option>
	        <?php 
              include("../confs/config.php");
              $sql = "SELECT id,name FROM categories";
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_assoc($result)):
	         ?>
	         <option value="<?php echo $row['id']?>">
	         	<?php echo $row['name']; ?>
	         </option>
	         <?php endwhile; ?>
		</select>

		<label for="cover">Cover</label>
		<input type="file" name="cover" id="cover">
		<br><br>
		<input type="submit" value="Add Book">
		<a href="book-list.php" class="back">Back</a>
	</form>
</body>
</html>