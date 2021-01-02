<?php 
//task-1
echo "<h2>Task-1:print 20 to 10 reversely by loop</h2>";
for($v =20 ; $v >= 10 ; $v--){
	echo $v. "<br>";
}

//task-2
echo "<h2>Task 2: sum 1,2,3,4 using loop</h2>";
$number = 0;

for ($name1=1 ; $name1<=4 ; $name1++){
	$number= $number+$name1;
}
echo "sum = ". $number ."<br>";

//task-3
echo "<h2> Task 3: make multiplication (40-45)</h2>";

for($m = 40; $m <=45; $m++ ){
	for($n = 1 ; $n <= 10; $n++){
		echo "$m x $n = ". ($m*$n)."<br>";
	}
	echo "===========<br>";
}


//task-4
	echo "<h2>Task 4: sum(1+2+3+4+5) by recursion function</h2>";
	function findSum($A, $N) { 
    if ($N <= 0) 
        return 0; 
    return (findSum($A, $N - 1) +  
                    $A[$N - 1]); 
} 
  
$A = array(1, 2, 3, 4,5); 
$N = sizeof($A); 
echo findSum($A, $N); 


//task-5
echo "<h2>Task 5: find the odd numbers from array by loop</h2>";
	
$numbers = array(1,2,3,4,5,6,7,8,9,10);
foreach ($numbers as $key => $value) {
	if(($value % 2)==0){
		
	}else{
		echo "<br>odd :".$value."<br>";
	     }
	}  


//task-6
echo "<h2>Task 6</h2>";
$names = array('afsara', 'elora', 'sana', 'lamia', 'humaira', 'nishu','monnujan', 'samrin', 'noboni', 'tasnim');
foreach ($names as $key => $value) {
	if (strlen($value)<=5){
          echo "<br>".$value;
	}else{
          
	     }
	}

?>