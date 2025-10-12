<!-- loops code repeat hota hai  -->


<?php
echo "hello world";

echo "hello world";

echo "hello world";


// while loop do-while for for each 
// while loop 
$i = 1;
while($i <= 5){
               echo "Number: $i <br>";
               $i++;
}
$num = 5;
$i = 1;
echo "<h2> Multiplication table of 5 </h2>";
while($i <=10){
               echo "$num x $i= " .($num * $i). "<br>";
               $i++;
}

$total = 0;
$i = 1;

while($i <= 100){
               $total += $i ;
               $i++;

}
echo "Sum of 1 to 100 = $total";


// do while loop 
$i = 1;
do{
               echo "number: $i <br>";
               $i++;
}while($i<=5);



$i = 10;
echo "<h3> Countdown </h3>";
do{
               echo "$i <br>";
               $i--;
}while($i>0);


$attempts = 1;
$maxattempts = 3;

do{
               echo "Attemot $attempts : enter password <br>";
               $attempts++;
}while($attempts <= $maxattempts);


// for loop 
for($i=1;$i<=5;$i++){
               echo"Number : $i <br>";
}


echo "<h3> Odd numbers 1 to 20</h3>";
for($i=1;$i<=200;$i+=2){
               echo "$i <br>";
}





echo "<h3> star pattern</h3>";
for($i = 1;$i<=5;$i++){
               for($j=1;$j<=$i;$j++){
                              echo "*";
               }
               echo "<br>";
}


// for each loop 
$fruits = ["apple","banana","manago"];
foreach($fruits as $fruit){
               echo "Fruit: $fruit <br>";
}


$student = [
               "name" => "alice",
               "age"  => 20,
               "course"=> "PHP"
];
echo "<h3> Student info </h3>";
foreach($student as $key => $value){
               echo ucfirst($key).":$value<br>";
}

$classes = ["class A " => ["alice","bob"],
                "calss B" => ["Charlie","David"]];
echo "<h2> Studenst in each class </h2>";
foreach($classes as $class => $students){
               echo $class;
               foreach($students as $student){
                              echo "$student";
               }
               echo "<br>";
}
