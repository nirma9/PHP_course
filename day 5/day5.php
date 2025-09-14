<!-- operaors -->
 <!-- arithemetic operator   + _ *  -->
  <!-- comparision operators -->
   <!-- logical operators -->
    <!-- increment 
      -->


 
      <?php
      $a = 5;
      $a += 3;
      echo $a;

5>3;
10 ==10 ;



$a = 6;
$b = 8;
$c = 5;
$d = 4;
($a >$b)&&($c<$d);


$a++;
$b--;
echo $a;
echo $b;
?>


<?php

$num1 = 15;
$num2 = 10;
$sum = $num1+$num2;
$sub = $num1-$num2;
$mul = $num1*$num2;
$div = $num1/$num2;

echo "sum of " .$num1. "and " .$num2. "is " .$sum. "<br>"; 
echo "mul of " .$num1. "and " .$num2. "is " .$mul.  "<br>"; 
echo "sub of " .$num1. "and " .$num2. "is " .$sub . "<br>"; 
echo "div  of " .$num1. "and " .$num2. "is " .$div. "<br>" ; 


?>

<?php
$num1 = 25;
$num2 = 40;
if ($num1 > $num2){
    echo $num1. "is grater than " .$num2;
}
elseif($num1 < $num2){
    echo $num2. "is grater than " .$num1;
}else{
    "both numbers r equal...";
}
?>