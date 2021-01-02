<?php

//closure
$greet = function(){
 echo "I am from function<br>";
};
echo $greet();

//closure with variables
$name = "shams";
$greet = function() use ($name){
 echo "I am ".$name."<br>";
};
echo $greet();

//callback
function greet($name,$callback){
	$result = '';
	if(is_callable($callback)){
		call_user_func($callback,$result);
	}

}
greet('shams',function(){
	echo"user defined function<br>";
});

//facade
class Car{
	public static function engine(){
		echo "engine";
	}
}
Car::engine();


 ?>
