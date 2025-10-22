<?php
function is_valid_emial($email){

               $pattern = '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/';
               return preg_match($pattern,$email)===1;
}

$tests = [
               "john.doe@example.com",
               "user+tag@sub.domain.co.in",
               "badermal@.com",
               'another@domain',
               'name@domian.c',
               'user@domain.com',
               'dot.@domain.com',


];

foreach($tests as $t){
               echo $t . '=>'.(is_valid_emial($t)?'valid':'invalid')."<br>".PHP_EOL;
}




$pattern = '/^(?:\+91[\-\s]?|0)?[6-9]\d{9}$/';
$number = "+919876543210";

if (preg_match($pattern, $number)) {
    echo "Valid mobile number";
} else {
    echo "Invalid mobile number";
}



$pattern = '/^(?:\+91[\-\s]?|0)?[6-9]\d{9}$/';
$number = "+919876543210";

if (preg_match($pattern, $number)) {
    echo "Valid mobile number";
} else {
    echo "Invalid mobile number";
}


$text = "Learn #PHP and #Regex today!";
preg_match_all('/#(\w+)/', $text, $matches);
print_r($matches[1]);




