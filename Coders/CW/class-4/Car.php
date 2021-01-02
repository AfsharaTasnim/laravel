<?php

class Car{

	public $name = "Toyota";
	public $model = "GTX<br>";
	private $color = "green<br>";// there is protector. Which is used to under package.

	public function getName(){
		
        echo "i am from method";
        return $this->color;//you can do echo. YOU have to echo atleast onetime.
        

	}

	public function carmodel(){
		echo " model from car<br>";
	}
	public function __construct($name){
		echo "i am from construct<br>".$name."<br>";
		
	}
	public function __destruct(){
		echo " i am last<br>";
	}
}


 $a = new Car("corolla");
 echo $a->name."<br>";
 echo $a->model;
 $a->getName();
 $a->carmodel();
 //$b = new Car();//if you call a function twice. Construct and Destruct function will print twice.
 
?>