<?php


//syntax error
echo "hello world";

//runtime error
// undefined_func();
// echo "This will not run";



//throw and catch exp
try {
    throw new Exception("Something went wrong!");
} catch (Exception $e) {
    echo "Caught: " . $e->getMessage();
}


try{
               throw new Exception("Unauthorized",401);

}catch (Exception $e){
               http_response_code($e -> getCode() );
               echo json_encode(['error'=> $e -> getMessage()]);
}



try {
    $a = 10; $b = 5;
    if ($b == 0) throw new DivisionByZeroError("Cannot divide by zero");
    echo $a / $b;
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage();
} finally {
    echo " - Done";
}

$h = null;
try{
               $h = fopen('log.txt','r');
               if(!$h) throw new RuntimeException('cannot Open file');
               $content = fread($h,filesize('data.txt'));
               echo $content;
}catch(RuntimeException $e){
               echo "File error: ".$e -> getMessage();
}finally{
               if ($h)fclose($h);
}





class AppException extends Exception {}
class DBException extends AppException {}
class NetworkException extends AppException {}

try {
    throw new DBException("Database is down");
} catch (AppException $e) {
    echo "App Error: " . $e->getMessage();
}