<?php

require 'config.php';

$per_page = 10;

$page = isset($_GET['page'])? (int)$_GET['page']: 1;

if($page <1) $page = 1;

//total rows 

$sql_count = "SELECT COUNT(*) AS total FROM students";

$result_count = $conn->query($sql_count);
$row_count = $result_count->fetch_assoc();
$total_rows = $row_count['total'];

$total_pages = ceil($total_rows/$per_page);

if($page >$total_pages) $page = $total_pages;

///offset nikalna

$offset = ($page -1) *$per_page;

//recors fetch

$sql = "SELECT * FROM students ORDER BY  id ASC limit $offset, $per_page";

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>PHP pagnition ex</title>
 <style>
                            body{
                              font-family :arial:padding:20px;}

                            table{ border-collapse:collapse ; width:100%}
                            /* td{
                              border:1px solid  #ccc;
                              padding:10px; */
                             
                            }
                            .pagnition a,.pagnition span{
                              padding:6px 10px;
                              border :1px solid gray;
                              margin-right : 5px;
                              text-decoration :none;
                            }
.current{
               background: #007bff;
               color: #fff;
}
.disabled{
               opacity:0.5;
               pointer-events :none;
}
</style>
</head>
<body>
               <h2> Stundets list</h2>
               <table>
                              <tr>
                                             <th>ID</th>
                                             <th>name</th>
                                             <th>Email</th>
                                             <th>Course</th>


                                             <?php while($row= $result->fetch_assoc()){
                                                            echo "<tr>";
                                                            echo "<td>" .$row['id']."</td";
                                                            echo "<td>" .$row['namee']."</td";
                                                            echo "<td>" .$row['email']."</td";
                                                            echo "<td>" .$row['course']."</td";
                                                            echo "</tr>";
                                             }
                                             ?>

                              </table>
                              <br>
                              <div class = "pagnition">
                                             <?php
                                             if($page > 1){
                                                            echo "a href = '?page=".($page-1)." '>prev</a>";
                                            }else{
                                             echo "<span class = 'disabled'>prev</span>";

               

}

//numbered buttons
                               for ($i =1; $i <= $total_pages; $i++){
                                             if($i == $page)
                                                            echo "<span class = 'current'>$i</span>";
                                             else
                                                            echo "<a href = '?page=$i>$i</a>";

               

}

                                if($page < $total_pages){
                                             echo "<a href = '?page=".($page+1)."'>Next </a>";

                                }else{
                                             echo "<span class = 'disabled'>Next</span>";
                                }
               ?>
               </div>
</body>
</html>





