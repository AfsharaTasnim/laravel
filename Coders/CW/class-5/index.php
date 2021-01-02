<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP FORM and DB</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	if(isset($_POST['button'])){
		$name = $_POST['username'];
		echo $name;

	}


	 ?>
	<h2>a form for database</h2>
	<form action="" method="POST">
     <input type="text" name="username"><br>
     <input type="password" name="password"><br>
     <input type="submit" name='button' value="register">
		
		
	</form>
</body>
</html>