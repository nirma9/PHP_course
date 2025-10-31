<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "students_db";

$conn = new mysqli_connect($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";





?>




<?php
include("config.php");

$searchname = '';
$rows = [];

if(isset($_GET['name'])){
               //trim and take user 
               $searchname = trim($_GET['name']);

               //prepare sql statements with placeholders

               $sql = "SELECT id,namee,email,course FROM students WHERE namee LIKE ? ORDER BY id asc";

               //prepare stements

               $stmt = mysqli_prepare($conn,$sql);
               mysqli_prepare($conn,$sql);

               if($stmt){
                              //bind parameters 
                              $param = '%' .$searchname.'%';
                              mysqli_stmt_bind_param($stmt,'s',$param);

                              //execute
                              mysqli_stmt_execute($stmt);

                              $result = mysqli_stmt_get_result($stmt);

                              //fetch into array

                              if($result){
                                             while($r = mysqli_fetch_assoc($result)){
                                                            $rows[]=$r;
                                             }
                                             mysqli_free_result($result);
                }

                //close
                mysqli_stmt_close($stmt);
               }else{
                              die("prepare failed: ".mysqli_error($conn));
               }
               mysqli_close($conn);
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>saerch</title>
</head>
<body>
               <h2> Search students by Name (safe)</h2>
               <form method = "get"action = "">
                              <input type = "text" name = "name" value = "<?php echo htmlspecialchars($searchname); ?>" placehoder = "type name">
                              <button tyoe = "submit">search </button>
                              
                              <table border =  "1" cellpaddin = "8" cellspacing = "0" style = "margin-top:15px;">
                                             <thead><tr><th>Id</th></tr></thead>
                                             <tbody>
                                                            <?php
                                                            if(!empty($rows)){
                                                                           foreach($rows as $r){
                                                                                          echo "<tr>";
                                                                                          echo "<td>".htmlspecialchars($r['id'])."</td>";
                                                                                          echo "<td>".htmlspecialchars($r['namee'])."</td>";
                                                                                          echo "<td>".htmlspecialchars($r['email'])."</td>";
                                                                                          echo "<td>".htmlspecialchars($r['course'])."</td>";
                                                                                          echo "<tr>";



                                                                           }
                                                            }else{
                                                                           if($searchname !==""){
                                                                                          echo "<tr><td colspan = '4' > No matching records for ".htmlspecialchars($searchname),"</td></tr>";
                                                                           }else{

                                                                           
                                                                           echo "<tr><td colspan = '4' > use the saerch box above . </td></tr>";
                                                                           }

                                                            }
                                                            ?>
</body>
</html>



