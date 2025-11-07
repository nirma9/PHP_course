<?php
require 'config.php';

$id = isset($_GET['id'])? (int)$_GET['id']: 0;
if($id<=0){
               header('location: index.php');
               exit;
}

//fetch existing

$sql = "SELECT id,name,email,age FROM student WHERE id = ? LIMIT 1 ";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i',$id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
if($row){
               header("location: index.php");
               exit;
}

$name = $row['name'];
$email = $row['email'];
$age = $row["age"];
$errors = [];

if($_SERVER['REQUEST_METHOD']==='POST'){
               $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                 $age= (int)($_POST['age']);


                 if($name === '')$errors[] = "name is required";
                 if($email === '' || !filter_var($email,FILTER_VALIDATE_EMAIL))$errors[]="valid email is required";
                 if($age <=0)$erros []= "valid age is required";

                 if($empty($errors)){
                              $sql = "UPDATE student SET name = ?, email = ?, age = ?  WHERE id = ?";

                              $stmt= $conn->prepare($sql);
                              $stmt->bind_param('ssii',$name,$email,$age,$id);
                              if($stmt->execute()){
                                             header("location: index.php ");
                                             exit;
                              }else{
                                             $errors = 'database error: '.$stmt->error; 
                              }
               
               


                              

                            
                             

                 }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Edit student</title>
                  <link rel = "stylesheet" href = "style.css">
</head>
<body>

<div class = "container">
               <h1>Edit student</h1>

              

               <form method = "post" action = "">
                              
                           <label> Name </label>
                                                <input type = "text" name = "name" value = "<?php echo htmlspecialchars($name);?>">

                                                 <label> Email</label>
                                                <input type = "email" name = "email" value = "<?php echo htmlspecialchars($email);?>">


                                                 <label> Age</label>
                                                <input type = "number" name = "age" value = "<?php echo htmlspecialchars($age);?>">


                                                <button type = "submit" >update </button>
                                                <a href = "index.php" class = "btn" >Back</a>
</form>
</div>




                              
              

               
               
</body>
</html>