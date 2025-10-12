<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>Document</title>
</head>
<body>
               <h1> Registration Form</h1>
               <form id = "regform" method = "post" action = "validate18.php" novalidate>


  <label for = "name">Full Name *</label>
  <input type="text" id = "name" name="name" required placeholder="Your full name">

  <label for= "email">Email *</label>
  <input type="email" name="email" id = "email" placeholder="name@example.com" required>

  <label>Age *</label>
  <input type="number" name="age"  id = "age" placeholder="18" required min="1" max="120">

  <button type="submit">Submit</button>
</form>
<script>
document.getElementById("myForm").addEventListener("submit", function(e){
  e.preventDefault();

  // Get field values
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let age = document.getElementById("age").value.trim();

  // Get error message elements
  let nameError = document.getElementById("nameError");
  let emailError = document.getElementById("emailError");
  let ageError = document.getElementById("ageError");

  // Reset errors
  nameError.textContent = "";
  emailError.textContent = "";
  ageError.textContent = "";

  // Validate Name
  if(name === "") nameError.textContent = "Name is required!";
  else if(name.length < 2) nameError.textContent = "Name must be at least 2 characters long.";

  // Validate Email
  let emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
  if(email === "") emailError.textContent = "Email is required!";
  else if(!emailPattern.test(email)) emailError.textContent = "Please enter a valid email address.";

  // Validate Age
  if(age === "") ageError.textContent = "Age is required!";
  else if(isNaN(age)) ageError.textContent = "Age must be a number!";
  else if(age < 1 || age > 120) ageError.textContent = "Age must be between 1 and 120!";

  // If no errors
  if(!nameError.textContent && !emailError.textContent && !ageError.textContent){
    alert("Form Submitted Successfully ✅");
  }
});
</script>

               
</body>
</html>