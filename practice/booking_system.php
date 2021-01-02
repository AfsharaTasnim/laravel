<?php
include 'booking_request.php';
$rq = new booking_request();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hotel Booking</title>
	
</head>
<body>
	<?php
     if(isset($_POST['submit'])){
     	$name=$_POST['name'];
     	$address=$_POST['address'];
     	$person=$_POST['person'];
     	$rq->userSave($name,$address,$person);
     	echo "submitted!!";
     }
	?>
	<h2>Booking Form</h2>
	<form action="" method="POST">
		<label for="name">Name:</label>
          <input type="text" name="name"><br>
     <label for="address">Address:</label>
		<input type="text" name="address"><br>
		 <label for="person">Person:</label>
       <input type="number" name="person"><br>
       <input type="submit" name="submit">
	</form>
</body>
</html>