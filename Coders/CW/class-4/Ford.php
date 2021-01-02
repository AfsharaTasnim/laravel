<?php
include 'Car.php';
class Ford extends Car{

public function carmodel(){
	echo "model from ford <br>";
}

}

$ford = new Ford("potol");//or we can write $ford = new Car(
echo $ford->name;
echo $ford->carmodel();



?>