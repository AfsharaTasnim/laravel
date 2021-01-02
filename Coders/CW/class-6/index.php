<?php 
include 'Database.php';
$db = new Database();
//user login
if(isset($_POST['submit'])){
	$username= $_POST['username'];
	$password= $_POST['password'];
	$result =  $db->login($username,$password);
	if(count($result) == 1){
		session_start();
      foreach($result as $data){
      	$_SESSION['username'] = $data['username'];
      	$_SESSION['id'] = $data['id'];
      	header('location:dashboard.php');
      }
	}else{
		echo "username or password does not match";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>loging page</title>
	<link rel="stylesheet" href="">
</head>
<body>
       <h2>Login Form</h2>
	 <form method="POST" action="">
	 	<label for="">username</label>
	 	<input type="text" name="username"><br>
	 	<label for="">password</label>
	 	<input type="password" name="password"><br>
	 	<input type="submit" name="submit" value="login">
	 	
	 </form>
    <a href="register.php"> Register</a>

</body>
</html>