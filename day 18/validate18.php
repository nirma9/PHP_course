<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
               $name = trim($_POST['name']);
               $email = trim($_POST['email']);
               $age = trim($_POST['age']);
               $errros = [];

               if(empty($name))
                              $errros['name']="name is required";
               elseif(strlen($name)<2)
                              $errors['name']="name mut be atleast 2 characters...";

               if(empty($email))
                              $errros['email'] = "email is required";
               elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
                              $errors['email'] = "invalid email format";

               if(empty($age))
                              $errors['age']="age is required";
               elseif(!filter_var($age,FILTER_VALIDATE_INT,['options'=>['min_range'=> 1,'max_range'=> 120]]))
                              $errors['age']= "age must be between 1 - 120";

               if(empty($errros)){
                              echo "Form submitted succesfully";

               }else{
                              print_r($errors);
               }
}