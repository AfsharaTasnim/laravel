<?php
//for loop task 1
for($i = 0 ; $i <5 ; $i++ ){
 	echo "I LOVE  (^_^) <br>";
 }
 //for loop array 
 $array = array('mango', 'apple', 'orange','banana','cherry');
 for($r = 0; $r <= 3; $r++){
 	echo $array[$r]."<br>===";
 }
 //array length (count)
 for($r = 0; $r < count($array) ; $r++){
 	echo $array[$r]."<br>";
 }
 //multiplication

 for($v = 1; $v <= 10 ; $v++){
 	echo "17 x ".$v ." =".(17*$v)."<br>";
 }

 //multiplication multiple
 for($y = 1; $y<=10; $y++){

 	for($t = 1 ; $t < 11; $t++){
       echo"$y x $t=".($y*$t)."<br>";
        }
        echo "=====<br>";

       	 }
       	 //recursion function
       	 function saveme($count){
       	 	echo "i am thanos<br>";
       	 	if($count != 0)
       	 	saveme(--$count);
       	 }
       	 saveme(3);
?>