<!-- super globals -->
 <?php
 if(isset($_GET['name'])){
               echo "hello," .$_GET['name'];
 }else{
               echo "Pls provide a name in url , e.g : name = rahul";
 }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Document</title>
 </head>
 <body>
        
 <h2> Post form exmaple </h2>
 <form method = "POST" action = "text.txt">
name:<input type = "text" name = "name"><br><br>
<input type = "submit" value = "Submit">
</form>               
</body>
 </html>

 <?php
 if(isset($_POST['name'])){
               echo "Welcome ".$_POST['name'];
 }else{
               echo "pls submit the form with your name...";
 }



?>




 <!DOCTYPE html>
 <html lang="en">
 <head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Document</title>
 </head>
 <body>
               <h2> contact from (secure)</h2>
               <form method = "POST"  action = "day15.php"  >
                              name :<input type = "text" name = "emial"><br><br>
                              email:<input type ="text" name = "name"><br><br>
                              message:<textarea name = "Message"></textarea><br><br>
                              <input type = "submit"value = "send">
</form>

 </body>
 </html>
  <?php
 
// if ($_SERVER['REQUEST_METHOD'] !== 'POST') exit("Invalid request");

// $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
// $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');
// $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '');
// 
// $errors = [];
// if ($name === '') $errors[] = "Name is required";
// if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email required";
// if ($message === '') $errors[] = "Message cannot be empty";
// 
// if ($errors) {
//     foreach ($errors as $err) echo $err . "<br>";
//     exit;
// }
// 
// echo "Thanks $name! Your message was received."; -->






?>

<?php
$name = $_REQUEST['name']??'';
$email= $_REQUEST['email']??'';
if($name && $email){
               echo "Hello, $name . your name is $email";

}
?>

<form method = "get">
               <input type = "text" name = "name" placeholder = "nammam(GET)">
               <input type = "email" name = "email" placeholder = "nammam(GET)">
               <button>Submit GET </button>
</form>

