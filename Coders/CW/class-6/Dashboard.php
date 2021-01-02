<?php
session_start();
//include 'update.php';
include 'Database.php';
$db = new Database();

//check login user
if(!isset($_SESSION['id'])){
   header("location: index.php");
}

//save data to database
if(isset($_POST['submit'])){
	//echo "submitted";
	$title = $_POST['title'];
	$description= $_POST['description'];
	//echo $title."  ".$description;
	$db->saveTask($title, $description);
	//file upload
	$tmpname = $_FILES['image']['tmp_name'];
	$imgName = uniqid().'.jpg';
	move_uploaded_file($tmpname, 'images/'.	$imgName);
	//echo "data saved";
}
  //show update success msg
	if(isset($_GET['msg'])){
		if($_GET['msg']==1){
		  echo"data-updated";
		 } 
	}
	//delete a task
	if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$db->delete($id);
		header("location:dashboard.php");
			}
	if(isset($_GET['complete'])){
		$id = $_GET['complete'];
		$id = $_GET['complete'];
		$db->complete($id);
	    header("location:dashboard.php");

	}		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
</head>
<body>
	<h2> Dashboard</h2>
	<a href="logout.php">logout(<?=$_SESSION['username'] ?>)</a><br>
	<a href="profile.php">go to profile</a>
	<form action="" method="POST" enctype="multipart/form-data">
		Title: <input  placeholder="your title"type="text" name="title"><br>
		<textarea name="description" placeholder="description" cols="30" ></textarea><br>
		<input type="file" name="image"><br>
		<input type="submit" name="submit" value="add task">

		
	</form>
	<table border="1" cellpadding="5px">
		<thead>
		
			<th>title</th>
			<th>description</th>
			<th>action</th>
		
		</thead>
		<tbody>
			<?php
			//fetch data from table
			$tasks = $db->getTasks();
			foreach ($tasks as $data ):
				# code...
			
			
	?>
			<tr>
				<td><?= $data['title']?></td>
				<td><?= $data['description']?></td>
				<td>
					<?php if( $data['status']=="complete"):?>
						<button disabled>completed</button>
						<?php  else: ?>
	<a href="update.php?id=<?= $data['id']?>">update</a>
	<a onclick="return confirm('are you sure want to delete?')" href="dashboard.php?delete=<?= $data['id']?>">delete</a>
	<a  onclick="return confirm('are you sure want to complete?')"href="dashboard.php?complete=<?= $data['id']?>">mark as complete</a>

<?php endif; ?>
				</td>

			</tr>

			<?php
	        endforeach;
		?>
		</tbody>
	</table>
</body>
</html>