
<?php 
session_start();
include 'Reader_database.php';
$db = new Reader_database();

 if(!isset($_SESSION['id'])){
    	header("location:index.php");}

    	
if(isset($_POST['submit'])){
	$book_name = $_POST['book_name'];
	$author =$_POST['author'];
    $buy_date = $_POST['buy_date'];
    $db->reader_formSave($book_name,$author,$buy_date);
    echo "inserted";}
   
    
    if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$db->delete($id);
		header("location:reader_form.php");
			}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>reader form</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="POST">
		<label for="">book name</label>
		<input type="text" name="book_name"><br>

		<label for="">author</label>
		<input type="text" name="author"><br>

		<label for="">date</label>
		<input type="date" name="buy_date">

		<input type="submit" name="submit" value="submit">
	</form>

	<table border=1 cellpadding="5px">
		<thead>
		<th>book name</th>
		<th>author</th>
		<th>buy_date</th>
		<th>active</th>
	</thead>
		<tbody>
			<?php
						$tasks = $db->getinfo();
                          foreach( $tasks as $data): ?>
		<tr>
			<td><?=$data['book_name']?></td>
		   <td><?=$data['author']?></td>
		   <td><?=$data['buy_date']?></td>
            <td><a href="reader_edit_form.php?id=<?=$data['id']?>">edit</a></td>
<td>
	<a onclick="return confirm('are you sure want to delete?')" href="reader_form.php?delete=<?= $data['id']?>">delete</a></td>

		</tr>
	<?php endforeach ?>
		</tbody>
	</table>
	<a href="index.php">back</a>
</body>
</html>