<?php

// if statement 
$age = 12;
if($age >= 18){
               echo "You are eligible to vote....";
}else{
               echo "you are not eligible to vote...";
}

// if else statement 

$marks = 35;
if ($marks >= 40){
               echo "pass";

}
else{
               echo "fail...";
}

// nested if statement 
$age = 25;
$citizen = true;
if($age >= 18){
               if ($citizen){
                              echo "You can vote....";
               }
}

// if elseif else statement

$day = "tuesday";
if ($day == "monday"){
               echo "Start of the week";
}
elseif ($day == "friday"){
               echo "weekend is clear";
}
else{
               echo "Normal day..";
}


$month = "january";
if ($month == "fob"){
               echo "this is feb";

}
elseif ($month == "march" ){
               echo "thsi si march";
}
elseif ($month == "april"){
               echo "this is april";
}
else{
             echo "  this si normal month";
}



// switch case statement 
 $signal = "black";
 switch($signal){
               case "red":
                              echo "Stop";
                              break;
               case "yellow":
                              echo "GEt ready...";
                              break;
               case "green": 
                              echo "Go !..";
                              break;
               default;
               echo "Invalid signal..";
               

 }
