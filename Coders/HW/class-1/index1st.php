<?php
//challenge 1
echo "<h1>welcome!</h1><br>";
echo "<h2>1.Challenge 1-wrote a php with html:</h2>";

    $first_name = "Afsara";
    $last_name  = "Tasnim";
echo "My name is $first_name $last_name.This is my first PHP page.<br> ";


echo "<h2>2. Took my full name with comma, spilt all full name:</h2>";

    $Full_Name = "Afsara,Tasnim,Shoptorshi";
    print_r(explode(",", $Full_Name));

//challenge 2
echo " <h2><br>Took 'Coders Trust Success Story' as array and made them a full sentence:</h2>";

    $coders = array("<br>Coders", "Trust", "Success", "Story<br>");
    echo implode (" ", $coders);


    //challenge 3
echo "<h2>3.Challenge 3:</h2>";
    $Full_Name = "Afsara,Tasnim,Shoptorshi<br>";

    $splited = explode(",", $Full_Name);
    $imploded = implode(" ", $splited);
echo $imploded;


    //challenge 4
   echo"<h2><br>4.Challenge 4 (part-1): </h2>";
    $name1 = "afshara";
    $name2 = "tasnim";
    $name3 = "shoptorshi" ;  
  
   $length1 = strlen($name1);
   $length2 = strlen( $name2);
   $length3 = strlen( $name3);

   if($length1<$length2 && $length1<$length3 ){
    echo "the shortest name is: ".$name1 ; 
    checkeven($length1);
   }  elseif($length2<$length1 && $length2<$length3){
    echo "the shortest name is: ".$name2. "<br>";
     checkeven($length2);
   } else{
    echo "the shortest name is: ".$name3;
    checkeven($length3);
   }      
    
     function checkeven($length){
   
    if ($length % 2 == 0){
      echo "you are general";
    }else{
      echo "you are odd";
    }
   }                                     


//CHALLENGE 5:
echo"<h2>5. find max between 3 numbers:</h2>";
echo (max(110, 240,321));



echo"<h2><br>6. pass  First name and last name in function and output welcome with my Full name:</h2>";
   function  fullname($First_name, $Last_name){
         echo "<br>Welcome! This is me ".$First_name. " ".$Last_name;}

    $First_name ="Afsara";
    $Last_name = "Tasnim";

     fullname($First_name,$Last_name);

echo "<h2><br>Challenge 7:<br></h2>";

    $first_number= 444;
    $second_number= 555;

    function  cal($first_number , $second_number){

        	if($first_number>$second_number){
        		$result1= $first_number-$second_number;
        		return $result1;
        	}else{
        		$result2 = $first_number+ $second_number;
        		return $result2;
        	}
     }
          echo cal($first_number,$second_number);
       ?>