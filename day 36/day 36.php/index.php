<?php
require 'config.php';

$sql = "SELECT id,name,email,age FROM student ORDER BY id DESC";

$stmt= $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?>




<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>stundets </title>
                  <link rel = "stylesheet" href = "style.css">
</head>
<body>

<div class = "container">
               <h1>Student list</h1>
               <a class = "btn" href = "create.php">Add new student</a>
               <table>
                              <thead>
                                             <tr>
                                                            <th>ID</th>
                                                            <th>name</th>
                                                            <th>Gmail</th>
                                                            <th>Age</th>
                                                            
</thead>
<tbody>
              <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= htmlspecialchars($row['id']); ?></td>
          <td><?= htmlspecialchars($row['name']); ?></td>
          <td><?= htmlspecialchars($row['email']); ?></td>
          <td><?= htmlspecialchars($row['age']); ?></td>
          <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
          </td>
        </tr>
        <?php endwhile; ?>

      </tbody>
    </table>

  </div>
</body>
</html>