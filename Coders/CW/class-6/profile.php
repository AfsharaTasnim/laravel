<?php 
session_start();

include 'Database.php';
$db = new Database();
//save data to pro
if(isset($_POST['submit'])){

 		$full_name = $_POST['full_name'];
 		$age = $_POST['age'];
 		$address = $_POST['address'];
 	  $db->profileSave($full_name,$age,$address);
          echo "updated";}
       //check login user
       if(!isset($_SESSION['id'])){header('location: index.php');} 
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>profile page</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<a href="logout.php">logout</a>

 	<table border="1" cellpadding="5px">
 		<form action="" method="POST">

	<input type="hidden" name="id" value="<?=$data['id']?>">
 	<label for="">Full Name</label>
	<input type="text" name="full_name"><br>
	<label for="">Your Age:</label>
	<input type="number" name="age" ><br>
	<label for="">Address</label><br>
<textarea name="address"  cols="30" rows="10"></textarea>	<br>
<input type="submit" name="submit" value="submit"></form>
 
 		<thead>
 			<th>fullname</th>
 			<th>age</th>
 			<th>address</th>
 		</thead>
 		<tbody>
 			<?php 
 			//fetch profile
 			$profiles = $db->getProfiles();
 			foreach ($profiles as $data): 
 			 ?>
 			<tr>
 				<td><?= $data['full_name']?></td>
 			<td><?= $data['age']?></td>
 				<td><?= $data['address']?></td>
 				<td><a href="editProfile.php?id=<?= $data['id']?>">Edit  Profile</a>
</td>

 				
 			</tr>
 		<?php endforeach; ?>

 		</tbody>
 	</table>
 </body>
 </html>