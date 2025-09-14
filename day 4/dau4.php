<?php
define("SITE_NAME","Learnphp");

$user_name="nirma";   #string var
$age = 45;
$is_registered = false; #bool var
$bal = 150.75;  #dec var
$hobbies =array("reading","coding","travel");

echo "welcome to ".SITE_NAME ."<br>";

echo "USER NAME:" .$user_name ."<br>";
echo "Age: " .$age ."<br>";

echo "registered: " .($is_registered? "yes":"no") ."<br>";

