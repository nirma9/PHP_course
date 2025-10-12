<?php
$cookie_name = "username";
$cookie_value ="Nimra";

setcookie($cookie_name,$cookie_value,time()+3600,"/");

if(isset($_COOKIE[$cookie_name])){
               echo "cookie ".$cookie_name. "already set value: ".$_COOKIE[$cookie_name];
}else{
               echo "cookie" .$cookie_name. "IS not set yet!";
}



$cookie_name = "username";
if(isset($_COOKIE[$cookie_name])){
               echo "<br>Welcome back...";
               $_COOKIE[$cookie_name]. "! <br>";
}else{
               echo "hello new user!  ...";
}



$cookie_name = "username";

setcookie($cookie_name, "", time() - 3600, "/");

echo "Cookie '" . $cookie_name . "' has been deleted.";
?>




<?php
$cookie_name = "username";
$cookie_value = "Nirmala";

// Set Cookie
setcookie($cookie_name, $cookie_value, time() + 3600, "/");

// Get Cookie
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie Value: " . $_COOKIE[$cookie_name] . "<br>";
} else {
    echo "Cookie not set yet.<br>";
}

// Delete Cookie
setcookie($cookie_name, "", time() - 3600, "/");
echo "Cookie deleted!";
?>