<?php
$servername = "localhost";
$username = "root";
$password = "";
$databse = "students_db";

$conn = mysqli_connect($servername,$username,$password,$databse);

if(!$conn){
    die("connection failed...".mysqli_connect_error());

}else{
    echo "connection succesfuuly<br>";
}

///create table

$crate_table = "CREATE TABLE IF NOT EXISTS students(
                                id INT(5) AUTO_INCREMENT PRIMARY KEY,
                                namee VARCHAR(50),
                                email VARCHAR(100),
                                course VARCHAR(100))";

if(mysqli_query($conn,$crate_table)){
    echo "table students created succesffully!...";
}else{
    echo "error ". mysqli_error($conn)."<br>";
}



//insert dat ainto atble

$sql = "INSERT INTO students (namee,email,course) VALUES('rahul sharma','rahil@gamil.com','PHP'),
                                                         ('priya','priya@gamil.com','python')";




if(mysqli_query($conn,$sql)){
    echo "RECORD inserted successfuuuly ";
}else{
    echo "error ". mysqli_error($conn)."<br>";
}




//fetch data 


$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo "ID:".$row['id']," - name: ".$row['namee']."- email : ".$row["email"]."-course: ".$row['course'],"<br>";
    }

}else{
    echo "NO records found!....";
}





///update data 

$sql = "UPDATE students SET course = 'java' where id = 1";

if(mysqli_query($conn,$sql)){
    echo "table updated succesffully!...";
}else{
    echo "error ". mysqli_error($conn)."<br>";
}




//delete table


$sql  ="DELETE FROM students WHERE id = 2";

if(mysqli_query($conn,$crate_table)){
    echo "table deleted  succesffully!...";
}else{
    echo "error ". mysqli_error($conn)."<br>";
}

mysqli_close($conn);