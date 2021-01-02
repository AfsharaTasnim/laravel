<?php 
include 'Database.php';
$db = new Database();
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>update</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	//check if id is set
	if(isset($_GET['id'])){
		//echo 'ID: '.$_GET['id'];
		$id = $_GET['id'];
		$data=$db->fetchUserTask($id);
		//print_r($data);
	}
	//update data
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$description=$_POST['description'];
		$db->updateTask($id,$title,$description);
		//echo'data updated';
		header('location:Dashboard.php?msg=1');
	}

	 ?>
	
	<h2>update data</h2>
	<form action="" method="POST">
		<?php foreach($data as $data): ?>
			<input type="hidden" name="id" value="<?= $data['id']?>">

		 <input  placeholder="your title"type="text" name="title" value="<?= $data['title']?>"><br>
		<textarea name="description" placeholder="description" cols="30" ><?= $data['description']?></textarea><br>
		<input type="submit" name="submit" value="update task">
  <?php endforeach; ?>
		
	</form>
</body>
</html>