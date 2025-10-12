<!-- #AARAY  -->
 <?php
 $cart = array("apple","banana","mango","orange");
 echo count($cart);


 $num = [10,20,30,40,50];
 echo "Array length: " .count($num);

//  sort 
sort($cart);
print_r($cart);


sort($num);
print_r($num);

// array merge 
$cart1 = array("apple","banana","mango");
$cart2 = array("orange","grapes");
$final = array_merge($cart,$cart2);
print_r($final);


 $a = [1,2,3];
 $b = [4,5,6];
 $c = array_merge($a ,$b);
 print_r( $c);


//  in_array 
echo in_array("guava",$cart) ? "Found":"not found";


// array_unique 

$fruits = ["apple","banana","apple","mango","banana"];
print_r(array_unique($fruits));



// array_reverse 
$num = [1,2,3,4,5,4,3,7];
print_r(array_reverse($num));