<?php
include 'db.php';

if (!isset($_GET['id'])) {
    die("ID is missing");
}

$id = intval($_GET['id']);

$stmt = mysqli_prepare($conn, "SELECT id, namee, email, course FROM students WHERE id = ? LIMIT 1");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $rid, $rnamee, $remail, $rcourse);
if (!mysqli_stmt_fetch($stmt)) {
    mysqli_stmt_close($stmt);
    die("Record not found");
}
mysqli_stmt_close($stmt);
?>
<!doctype html>
<html>
<head><title>Edit Student</title></head>
<body>

<h2>Edit Student (ID: <?= $rid; ?>)</h2>

<form action="update.php" method="post">
  <input type="hidden" name="id" value="<?= $rid; ?>">

  Name: <input type="text" name="name" value="<?= htmlspecialchars($rname); ?>"><br><br>
  Email: <input type="email" name="email" value="<?= htmlspecialchars($remail); ?>"><br><br>
  Course: <input type="text" name="course" value="<?= htmlspecialchars($rcourse); ?>"><br><br>
  <!-- Age: <input type="number" name="age" value="<?= $rage; ?>"><br><br> -->

  <button type="submit">Update Student</button>
</form>

</body>
</html>