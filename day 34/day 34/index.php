<?php
include "db.php";

$result = mysqli_query($conn,"SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>student list</title>
</head>
<body>
               <h2> Student List</h2>
               <?php if(isset($_GET['msg'])):?>
                              <p style = "color:green;">
                                             <?php if($_GET['msg']=='updated')echo "Record updated successfully...";
                                             elseif($_GET['msg']=='deleted')echo "Record deleted successfully....";
                                             ?>
                                             </p>
                                             <?php endif;?>
                                             <table border = "1" cellspadding = "8">
                                                            <tr>
                                                                           <th>ID</th>
                                                                           <th>name</th>
                                                                           <th>email</th>
                                                                           <th>course</th>
               </tr>
               <?php if(!$result): ?>
                              <tr><td colspan="5">Error fetching data : <?= mysqli_error($conn); ?></td></tr>
                              <?php else:?>
                                             <?php while($row = mysqli_fetch_assoc($result)):?>
                                                            <tr>
                                                                           <td><?= $row['id'];?></td>
                                                                           <td><?= htmlspecialchars($row['namee']);?></td>
                                                                           <td><?= htmlspecialchars($row['email']);?></td>
                                                                           <td><?= htmlspecialchars($row['course']);?></td>
                                                                           <td><?$row=['age'];?></td>
                                                                           <td><a href= "edit.php?id=<?=$row['id'];?>">Edit</a> |
                                                                           <a href="delete.php?id=<?= $row['id'];?>"
                                                                           onclick="return confirm('are you sure you want to delete this record ?')">Delete </a>
                                             </td>
                                             <tr>
                                                            
                                                            <?php endwhile;?>
                                                            <?php endif; ?>
                                             </table>



               
</body>
</html>