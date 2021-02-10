v<?php
class Database
{
	public $connection;
	public $hostName="localhost";
	public $dbName="ctg_todo";
	public $dbUserName="root";
	public $dbPassWord="";

	public function __construct(){
		$this->connection  = new PDO("mysql:host=$this->hostName;dbname=$this->dbName",$this->dbUserName,$this->dbPassWord);
		  
		  if($this->connection ){
		  	//echo "connected";
		  }else{
		  	echo "error";
		  }

	}
// master save data to database
	public function saveTask($title,$description){
		 
		 $userId = $_SESSION['id'];
       $query = "INSERT INTO tasks (user_id,title,description,status) VALUES($userId,:title,:description,:status)";
       $statement= $this->connection->prepare($query);
       $statement->execute(array(
       	':title' => $title,
        ':description' => $description,
         ':status' => "active"
     ));
	}

	//fetch data
	public function getTasks(){
		 $userId = $_SESSION['id'];
		$query = "SELECT * FROM tasks WHERE  user_id= $userId";
		$statement= $this->connection->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}
	//register a user
	public function userSave($username,$password,$email){
       $query = "INSERT INTO users (username,password,email,joining_date) VALUES(:username,:password,:email,:joining_date)";
       $statement= $this->connection->prepare($query);
       $statement->execute(array(
       	':username' => $username,
        ':password' => md5($password),
        ':email' => $email,
         ':joining_date' => date ("Y-m-d")  
         ));
       //create profiles data
      $generatedId = $this->connection->lastInsertId();
       	  $query = "INSERT INTO  profiles (user_id) VALUES ($generatedId) ";
		  $statement= $this->connection->prepare($query);
		  $statement->execute();

	}
	//fetch a user
	public function fetchUserTask($id){
		  $query = "SELECT * FROM tasks WHERE id=".$id;
		  $statement= $this->connection->prepare($query);
		  $statement->execute();
		  $result = $statement->fetchAll();
				return $result;


	}
	//update a task
	public function updateTask($id,$title,$description){
		  $query = "UPDATE tasks SET title='$title', description='$description' WHERE id='$id'";
		  $statement= $this->connection->prepare($query);
		   $statement->execute();
		   return'success';
	}
	//delete a task
	public function delete($id){
		  $query = "DELETE FROM tasks WHERE id=$id ";
		  $statement= $this->connection->prepare($query);
		  $statement->execute();
		  return'success';

	} 
	//marfk as complete
	public function complete($id){
		 $query = "UPDATE tasks SET status='complete' WHERE id='$id'";
		  $statement= $this->connection->prepare($query);
		   $statement->execute();
		   return "success";
	}
	//login
	public function login($username,$password){
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$statement= $this->connection->prepare($query);
		   $statement->execute();
		     $result = $statement->fetchAll();
		    return $result;
	}
	//check same username
	public function checkUsername($username){
	$query = "SELECT * FROM users WHERE username='$username'";
		$statement= $this->connection->prepare($query);
		   $statement->execute();
		     $result = $statement->fetchAll();	
		     return $result;
	}
	//update profile
	/*public function updateProfile($full_name,$age,$address){
		  $query = "UPDATE profiles SET full_name='$full_name', age='$age' , address='$address' WHERE id='$id'";
		  $statement= $this->connection->prepare($query);
		   $statement->execute();
		   return'success';
	}*/
	//save profile
	public function profileSave($full_name,$age,$address){
		 $userId = $_SESSION['id'];

       $query = "INSERT INTO profiles (user_id,full_name,age,address) VALUES($userId,:full_name,:age,:address)";
       $statement= $this->connection->prepare($query);
       $statement->execute(array(
       	':full_name' => $full_name,
        ':age' => $age,
        ':address' => $address,
         ));}
       //fetch data to profile
       public function getProfiles(){
       			$userId=$_SESSION['id'];

		 $query = "SELECT * FROM profiles WHERE user_id= '$userId '";
		$statement= $this->connection->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
       }
       //fetch a userprofile
       public function fetchUserProfile($id){

       	$query = "SELECT * FROM profiles WHERE id= ".$id;
		$statement= $this->connection->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;

       }
       //edit profile
       public function editProfile($id,$full_name,$age,$address){
       	$query = "UPDATE profiles SET full_name='$full_name' , age='$age', address='$address' WHERE id='$id'";
		  $statement= $this->connection->prepare($query);
		   $statement->execute();
return 'success';

       }
}
?>