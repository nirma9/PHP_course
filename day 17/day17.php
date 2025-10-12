<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Document</title>
</head>
<body>
               <form action="process.php" method="post">
  <label>Name:</label>
  <input type="text" name="name" required><br><br>

  <label>Email:</label>
  <input type="email" name="email" required><br><br>

  <label>Message:</label>
  <textarea name="message" rows="5" required></textarea><br><br>

  <button type="submit">Send</button>
</form>


<form action="process.php" method="post" enctype="multipart/form-data">
  <input type="file" name="myfile">
  <button type="submit">Upload</button>
</form>
               
               
</body>
</html>