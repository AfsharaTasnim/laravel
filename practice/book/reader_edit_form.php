<?php 
include 'Reader_database.php';
$db = new Reader_database();



if(isset($_POST['submit'])){
	$id = $_POST['id'];
    $book_name = $_POST['book_name'];
	$author =$_POST['author'];
   
    $db->updateTask($id, $book_name, $author);
    header("location:reader_form.php");
}
if(isset($_GET['id']))
  $id = $_GET['id'];
  $data = $db->fetchuser($id);
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
 	edit
 	<form action="" method="POST">
 
 		 <?php foreach($data as $data): ?>
 		 	<input type="hidden" name="id" value="<?= $data['id']?>">
	

 		<label for="">book name</label>
		<input type="text" name="book_name" value="<?= $data['book_name']?>"><br>

		<label for="">author</label>
		<input type="text" name="author"  value="<?= $data['author']?>"><br>



		<input type="submit" name="submit" value="submit">
	<?php endforeach?>

	</form>
 </body>
 </html>