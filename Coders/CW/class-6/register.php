<?php 
include 'Database.php';
$db = new Database();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>register</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<?php
 	if(isset($_POST['submit'])){
 		$username = $_POST['username'];
 		$password = $_POST['password'];
 		$email = $_POST['email'];
 		$usernameCount = $db->checkUsername($username);
 		if(strlen($password) > 5 ){
 			if(count($usernameCount) == 0){
 		      $db->userSave($username,$password,$email);
            echo "registered!!";
        }else{
        	echo "username already taken!";
        }
         
 		}else{
 			echo"password must be more than 5";
 		}
 		
 	}  ?>
 	<form action="" method="POST">
 		<label for="">username</label>
 		<input type="text" name="username"><br>
 			
 		<label for="">email</label>
 		<input type="email" name="email"><br>
 		<label for="">password</label>
 	
 		<input type="password" name="password"><br>
 		<input type="submit" name="submit" value="register">
 	</form>
 </body>
 </html>