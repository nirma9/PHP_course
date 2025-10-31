<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "students_db";


//create   connection
$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
               die('connection Failed: '.$conn->connect_error);
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
               $name = trim($_POST['name']?? '');
               $email = trim($_POST['email']?? '');
               $passwordplan =$_POST['password']?? '';


               $errors = [];
               if(empty($name)){
                              $errors[] = "name is requoired";
               }
               if(empty($email) || filter_var($email,FILTER_VALIDATE_EMAIL)){
                              $errors
                              
                              []= "valid email is required...";

               }
               if(strlen($passwordplan)<6){
                              $erros[] = "password must be atleast 6 characters...";
               }
               if (count($errors) === 0){
                              $passwordHash =password_hash($passwordplan,PASSWORD_DEFAULT); 
            



               //PREPAPRE STATEMENT

               $stmt = $conn->prepare("INSERT INTO students(name,email,passowrd)VALUES(?,?,?)");
               if($stmt === false){
                              die("prepare failed: ".$conn->error);
               }

               //bind parametrs

               $stmt->bind_param('sss',$name,$emial,$passwordHash);

               if($stmt->execute()){
                              echo "registration successfull!";
               }else{
                              if($conn->errno === 1062){
                                             echo "Error: email already registered";
                              }else{
                                             echo "Execute failed: ".$stmt->error;
                              }
               }


               //close statement

                  $stmt->close();
}else{
               foreach($errors as $err){
                              echo "<p>" .htmlspecialchars($err). "<p>";
               }
}



}


$conn->close();