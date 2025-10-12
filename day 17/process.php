<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
               $name = $_POST['name'];
               $email = $_POST['email'];
               $message = $_POST['message'];

               if(empty($name) ||empty($email)||empty($message)){
                              echo "Please fill all fields properly..";
               }
               else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                              echo "Invalid emial format..";
               }
               else{
                              echo "Thank you $name ! your message has been received..";
                              echo "<br> Your emial: $email";
                              echo "<br> Your message: $message";
               }
}


$name = htmlspecialchars($_POST['name']);
echo "Hello $name";


if(isset($_FILES['myfile'])){
               $file = $_FILES['myfile'];
               $filename = $file['name'];
               $tmp = $file['tmp_name'];
               $size = $file['size'];
               if($size>2000000){
                              echo "File too large!max 2 mb allowed..";
               }else{
                              move_uploaded_file($tmp,"uploads/$filename");
                              echo "file uploaded successfully.....";
               }
}
