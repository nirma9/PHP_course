<?php
require 'config.php';

$name = $email = $age = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $age   = (int) $_POST['age'];

    if ($name == "") $errors[] = "Name is required.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid email is required.";
    if ($age <= 0) $errors[] = "Valid age is required.";

    if (empty($errors)) {
        $sql = "INSERT INTO student (name, email, age) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $email, $age);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>add student</title>
               <link rel = "stylesheet" href = "style.css">
</head>
<body>
              <div class = "container">
               <h1>add student</h1>
               <?php if(!empty($errors)):?>
                              <div class ="errors">
                                             <?php foreach($errors as $err) echo '<p>'.htmlspecialchars($err).'</p>';?>
                                             <?php endif;?>

                                             <form method = "post" action ="">
                                                <label> Name </label>
                                                <input type = "text" name = "name" value = "<?php echo htmlspecialchars($name);?>">

                                                 <label> Email</label>
                                                <input type = "email" name = "email" value = "<?php echo htmlspecialchars($email);?>">


                                                 <label> Age</label>
                                                <input type = "number" name = "age" value = "<?php echo htmlspecialchars($age);?>">


                                                <button type = "submit" >save </button>

                                                <a href = "idndex.php" class = "btn" >back </a>

                                                </form>
               </div>
               



                                            


               
</body>
</html>
