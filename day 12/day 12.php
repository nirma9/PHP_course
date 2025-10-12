<!-- arrys   spl var  -->
 
<?php
$array_nam = array("apple","banana");
$array_na = ["apple","banana","cherry"];
// indexed array 
echo $array_na[0];
echo $array_na[2];


$fruits = ["apple","abnana","grapes"];
foreach($fruits as $fruit){
               echo $fruit . "<br>";
}



#assocaitive array
$age = [
               "alice" =>  25,
               "bob"=> 30,
               "cahrie" => 35
];

echo $age["alice"];



foreach($age as $name => $years){
               echo $name . " is " . $years . "  Years old <br> ";

}



#multidimenesional array 


$student = [
               ["alice",25,"A+"],
               ["Bob",30,"B"],
               ["cahrlie",35,"A"]
              
               
];
echo $student[0][0];
echo $student[1][0];
echo $student[1][2];
echo $student[0][2];

foreach ($student as $sdnt){
               echo "Name :" .$sdnt[0] . ",age: " .$sdnt[1] . ",Grade :" .$sdnt[2], "<br>";
}


