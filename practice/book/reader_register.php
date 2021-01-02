<?php 
include 'Reader_database.php';
$db = new Reader_database();
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$db->userSave($username,$password);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>registration</title>
	<link rel="stylesheet" href="">
</head>
<body>
	register
	<form action="" method="POST">
		<label for="">username</label>
 		<input type="text" name="username"><br>
 		<label for="">password</label>
 		<input type="password" name="password"><br>
 		<input type="submit" name="submit" value="submit">

	</form>
	<a href="index.php">back</a>
</body>
</html>