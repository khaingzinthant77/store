<?php
	 session_start();
	include("../../admin/confs/config.php");


	$cart = 0;
	if(isset($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $qty) {
			$cart += $qty;
		}
	}

	if(isset($_GET['cart'])){
		$cart_id = $_GET['cart'];
		$book = mysqli_query($con,"SELECT * FROM book WHERE category_id = $cat_id");
	}
	else{
		$book = mysqli_query($con,"SELECT * FROM book");
	}
	$cats = mysqli_query($con,"SELECT * FROM categories");

 	$id = $_GET['id'];
 	$books = mysqli_query($con, "SELECT * FROM book WHERE id = $id");
 	$row = mysqli_fetch_assoc($books);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<h1 id="title">Book Store</h1>

  <div class="info">
    <a href="../../order/view-cart.php" title="">
		(<?php echo $cart; ?>) book in your cart
    </a>
  </div>

  <div class="sidebar">
    <ul class="cats">
      <li>
        <b><a href="../../index.php">All Books</a></b>
      </li>
      <?php while($cat = mysqli_fetch_assoc($cats)): ?>
      <li>
        <a href="../../index.php?cat=<?php echo $cat['id'] ?>">
          <?php echo $cat['name'] ?>
        </a>
      </li>
      <?php endwhile; ?>
      
      <form action="../../index.php" method="get" class="search">
      	<input type="text" name="q" placeholder="Search by title">
      	<input type="submit" value=" ">
      </form>
    </ul>
  </div>

  <div class="main">
  	<br>
    <h2>Book Detail</h2>
	
	<div class="detail">
	 	<a href="../../index.php" class="back">&laquo; Go Back</a>
	 	<img src="./books/<?php echo $row['cover'] ?>">
	 	<h2><?php echo $row['title'] ?></h2>
	 	<i>by <?php echo $row['author'] ?></i>,
	 	<b>$<?php echo $row['price'] ?></b>
	 	<p><?php echo $row['summary'] ?></p>
	 	<a href="../../order/add-to-cart.php?id=<?php echo $id ?>" class="add-to-cart">
	 Add to Cart
	 </a>
	</div>
  </div>

  <div class="footer">
    &copy; <?php echo date("Y") ?>. All right reserved.
  </div>

	
</body>
</html>