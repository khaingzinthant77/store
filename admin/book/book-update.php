<?php 
	include("../confs/config.php");

	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$summary = $_POST['summary'];
	$price = $_POST['price'];
	$category = $_POST['category'];

	$cover = $_FILES['cover']['name'];
	$tmp = $_FILES['cover']['tmp_name'];

	if ($cover) {
		move_uploaded_file($tmp,"books/$cover");
		$sql = "UPDATE book SET title = '$title', author = '$author',
		 summary = '$summary', price = '$price', category_id = '$category',
		  cover = '$cover', created_date = now(), modified_date = now() WHERE id= $id";
	}
	else{
		$sql = "UPDATE book SET title = '$title',author = '$author',
		summary = '$summary',price = '$price',category_id = '$category',created_date = now(),modified_date = now() WHERE id = $id";
	}

	mysqli_query($con,$sql);
	header("location: book-list.php");
 ?>