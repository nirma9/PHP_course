<?php
$host = "localhost";
$user = "root";
$pass = '';
$db = "students_db";



$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
               die("connection failed:".$conn->connect_error);

}

//set charset

$conn->set_charset('utf8mb4');

