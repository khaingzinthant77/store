<?php 
	include("../confs/config.php");

	$title = $_POST['title'];
	$author = $_POST['author'];
	$summary = $_POST['summary'];
	$price = $_POST['price'];
	$category_id = $_POST['category'];
	$cover = $_FILES['cover']['name'];
	$tmp = $_FILES['cover']['tmp_name'];

	if(cover){
		move_uploaded_file($tmp, "books/$cover");
	}

	$sql = "INSERT INTO book(title,author,summary,price,category_id,cover,created_date,modified_date) VALUES('$title','$author','$summary','$price','$category_id','$cover',now(),now())";
	$result = mysqli_query($con,$sql);

	header("location: book-list.php");

 ?>