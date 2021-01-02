<?php 
session_start();
include 'Database.php';
$db = new Database();
//save profile

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>edit</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	// check if id is set
	if(isset($_GET['id'])){
		$id = $_GET['id'];
       $data=$db->fetchUserProfile($id);
		}
		//edit data 
		if(isset($_POST['submit'])){
          $id= $_POST['id'];
 		$full_name = $_POST['full_name'];
 		$age = $_POST['age'];
 		$address = $_POST['address'];
 		$db->editProfile($id,$full_name,$age,$address);
          header("location:profile.php");}
		
	 ?>

	
	<h2>edit profile</h2>
		<form action="" method="POST">
			<?php foreach($data as $data): ?>


	<input type="hidden" name="id" value="<?=$data['id']?>">
 	<label for="">Full Name</label>
	<input type="text" name="full_name" value="<?=$data['full_name']?>"><br>
	<label for="">Your Age:</label>
	<input type="number" name="age" value="<?=$data['age']?>"><br>
	<label for="">Address</label><br>
	<textarea name="address" id="" cols="30" rows="10"><?=$data['address']?></textarea><br>
	<input type="submit" name="submit" value="submit"></form>
 <?php endforeach ?>
</body>
</html>
