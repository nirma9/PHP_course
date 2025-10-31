<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = intval($_POST['id']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $course = trim($_POST['course']);
   

    if (empty($name) || empty($email)) {
        die("Name and email cannot be empty.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    $stmt = mysqli_prepare($conn, "UPDATE students SET name=?, email=?, course=?, WHERE id=?");
    mysqli_stmt_bind_param($stmt, "sssii", $name, $email, $course, $id);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("Location: index.php?msg=updated");
        exit;
    } else {
        echo "Error updating record: " . mysqli_stmt_error($stmt);
        mysqli_stmt_close($stmt);
    }
}
?>
