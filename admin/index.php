<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Login to Book Store Administration</h1>
	<form action="../auth/login.php" method="post" accept-charset="utf-8">
		<label for="name">Name</label>
		<input type="text" name="name" id="name">
		
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
		<br><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>