<!-- super globals 
  -->

  <!-- request -->

  <?php
  $name = $_REQUEST['name']??'';
  $email = $_REQUEST['email']??'';

  if($name && $email){
               echo "Hello ,$name . you email is $email";

  }
  ?>

  <form metod = "get">
               <input type = "text" name = "name" placeholder = "Enter name(GET)">
                 <input type = "email" name = "email" placeholder = "Enter emial(GET)">
                 <button> Submit GET</button>
</form>

<form metod = "post">
               <input type = "text" name = "name" placeholder = "Enter name(post)">
                 <input type = "email" name = "email" placeholder = "Enter emial(post)">
                 <button> Submit POST</button>
</form>



<!-- $_SERVER -->
 <?php

echo "Request method: " .$_SERVER["REQUEST_METHOD"],"<br>";
echo "Script name :".$_SERVER["SCRIPT_NAME"]. "<br>";
echo "Host: ".$_SERVER["HTTP_USER_AGENT"]."<br>";
echo "User Agent: ".$_SERVER["HTTP_USER_AGENT"]."<br>";
echo "Client ip:" .$_SERVER['REMOTE_ADDR']."<br>";
?>


<!-- $_FILES
  -->


  <!-- $_SESSION -->

  <?php
  session_start();

  if($_SERVER['REQUEST_METHOD']==="POST"){
               $username = $_POST["username"]??'';
               if($username === "admin"){
                              $_SESSION['user']=$username;
                              echo "welcome $username!you are logged in ";
               }else{
                              echo "inavlaid user name...";
               }
  }
  if(isset($_SESSION['user'])){
               echo "<br> session active: ".$_SESSION['user'];
  }
  ?>




<!-- $_COOKIE -->
 <?php
 $visits = $_COOKIE['visits']?? 0;
 $visits++;
 setcookie("visits",$visits,time()+3600);
 echo "You have visisted this page $visits times..";

