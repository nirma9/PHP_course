<?php
$a =25;
$b = 15;
$sum = $a+$b;
echo "addition ka result hai " .$sum ."<br>";


// <!-- substraction -->

$diff = $a-$b;
echo "substraction is :" .$diff ."<br>";

$product = $a*$b;
echo "multiplication is :" .$product;
$quotient = $a / $b;
echo "result for division :" .$quotient;



$remainder = $a % $b;
echo "modulus result is " .$remainder. "<br>";

?>

<?php
echo 10/4;
?>

<?php
$num = 11;
if ($num %2 == 0){
               echo "even number...";
}
else{
               echo "odd number..<br>";
}
?>

<?php
$a= 10;
$b = 0;
if($b !=0){
               echo "result:" .($a/$b);
}else{
               echo "error : zero se divide nhi kar skate...";
}
