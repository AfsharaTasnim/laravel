<?php
class booking_request{
	public $request;
	public $hostName="localhost";
	public $dbName="booking_request";
	public $dbUserName="root";
	public $dbPassWord="";

	public function __construct(){
		$this->request  = new PDO("mysql:host=$this->hostName;dbname=$this->dbName",$this->dbUserName,$this->dbPassWord);
		  
		  if($this->request ){
		  	echo "connected";
		  }else{
		  	echo "error";
		  }
}
public function userSave($name,$address,$person){
       $query = "INSERT INTO requests (name,address,person,date) VALUES(:name,:address,:person,:date)";
       $statement= $this->request->prepare($query);
       $statement->execute(array(
       	':name' => $name,
        ':address' => $address,
        ':person'=> $person,
         ':date' => date ("Y-m-d")     ));
	}
	public function getRequest(){
		$query = "SELECT * FROM requests";
		$statement= $this->request->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}
}
?>