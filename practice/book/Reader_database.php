<?php 
class Reader_database{

public $connection;
	public $hostName="localhost";
	public $dbName="book";
	public $dbUserName="root";
	public $dbPassWord="";

	public function __construct(){
		$this->connection  = new PDO("mysql:host=$this->hostName;dbname=$this->dbName",$this->dbUserName,$this->dbPassWord);
		  
		  if($this->connection ){
		  }else{
		  	echo "error";
		  }
}

// reader form data save to database
public function reader_formSave($book_name,$author,$buy_date){
	$reader_id = $_SESSION['id'];
	$query = "INSERT INTO reader_form (reader_id,book_name, author, buy_date, status ) VALUES ($reader_id, :book_name, :author, :buy_date ,:status)";
	$statement=$this->connection->prepare($query);
	$statement->execute(array(
		
    ':book_name'=>$book_name,
     ':author'=>$author,
     ':buy_date'=> $buy_date,
     ':status' => "active"
	));}


// get info from database
public function getinfo(){
	 $reader_id = $_SESSION['id'];
     $query = "SELECT * FROM reader_form WHERE reader_id = '$reader_id'";
     $statement=$this->connection->prepare($query);
     $statement->execute();
     $result=$statement->fetchAll();
     return $result;}



// registration of user
public function userSave($username,$password){
		$query = "INSERT INTO reader_id(username, password) VALUES (:username, :password )";
	$statement=$this->connection->prepare($query);
	$statement->execute(array(
    ':username'=>$username,
     ':password'=>md5($password)
     
	));
 // create reader_id


}
	//fetch user
	public function fetchuser($id){
		   $query = "SELECT * FROM reader_form WHERE id=".$id;
     $statement=$this->connection->prepare($query);
     $statement->execute();
     $result=$statement->fetchAll();
     return $result;

	}

//update a task
public function updateTask( $id,$book_name, $author){
	$query = "UPDATE reader_form SET book_name='$book_name', author='$author' WHERE id= '$id'";
	     $statement=$this->connection->prepare($query);
	        $result=  $statement->execute();
	        return $result;}


public function login($username , $password){
	 $password = md5($password);
     $query = "SELECT * FROM reader_id 		WHERE username = '$username'AND password='$password'";
     $statement=$this->connection->prepare($query);
     $statement->execute();
     $result=$statement->fetchAll();
     return $result;
}
public function delete($id){
		  $query = "DELETE FROM reader_form WHERE id='$id' ";
		  $statement= $this->connection->prepare($query);
		  $statement->execute();
		  return'success';

	} 
}


 ?>