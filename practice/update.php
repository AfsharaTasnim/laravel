<?php
include 'Database.php';
$db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	//check if
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$data =$db->fetchUserTask($id);
		print_r($data);
	}
	?>
	<form action=""></form>
	<form action="" method="POST">
		Title: <input  placeholder="your title"type="text" name="title"><br>
		<textarea name="description" placeholder="description" cols="30" ></textarea><br>
		<input type="submit" name="submit" value="add task">

		
	</form>
</body>
</html>