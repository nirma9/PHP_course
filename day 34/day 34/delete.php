<?php
include "db.php";

if (!isset($_GET['id'])) {
    die("ID missing");
}

$id = intval($_GET['id']);

$sel = mysqli_prepare($conn, "SELECT id FROM students WHERE id = ? LIMIT 1");
mysqli_stmt_bind_param($sel, "i", $id);
mysqli_stmt_execute($sel);
mysqli_stmt_store_result($sel);

if (mysqli_stmt_num_rows($sel) == 0) {
    die("Record not found");
}
mysqli_stmt_close($sel);

$stmt = mysqli_prepare($conn, "DELETE FROM students WHERE id = ? LIMIT 1");
mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    header("Location: index.php?msg=deleted");
    exit;
} else {
    echo "Error deleting record: " . mysqli_stmt_error($stmt);
}
?>

