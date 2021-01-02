<?php 
include 'Reader_database.php';
$db = new Reader_database();

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result=$db->login($username,$password);
	if(count($result)==1){
		session_start();
		foreach($result as $data){
			$_SESSION['username']= $data['username'];
			$_SESSION['id'] = $data['id'];
			header('location:reader_form.php');
		}
	}else{
			echo"username or password does not match";
		}
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>login</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	login
 	<form action="" method="POST">
 		<label for="">username</label>
 		<input type="text" name="username"><br>
 		<label for="">password</label>
 		<input type="password" name="password"><br>
 		<input type="submit" name="submit" value="submit">
 	</form>
 	<a href="reader_register.php">register</a>
 </body>
 </html>