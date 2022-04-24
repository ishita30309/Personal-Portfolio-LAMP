<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<form action="" method=POST> 
  <div class="container">
    <h1>Register</h1>
    <p>Create your account, its free and it only takes a minute.</p>
    <input type="text" placeholder="First Name" name="firstname" id="firstname" required>
    <input type="text" placeholder="Last Name" name="lastname" id="lastname" required>
    <input type="email" placeholder="Email" name="email" id="email" required>
    <input type="password" placeholder="Password" name="pass" id="pass" required>
    <input type="password" placeholder="Confirm Password" name="cpass" id="confirmpassword" required>
    <input type="date" name="birthday" id="birthday" placeholder="DD/MM/YYYY" required>
    <p><input type="checkbox" > I accept the Terms of Use & <a href="#">Privacy policy</a>.</p>

    <button type="submit" class="registerbtn">Register Now</button>
  </div>
</form>
<p id="last">Already have an account? <a href="#">Sign in</a>.</p>
</center>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "Ishita@2002";
$dbname = "lampdb";
if($_POST){
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['email'];
$d=$_POST['pass'];
$e=$_POST['birthday'];
$sql = "INSERT INTO login (firstname, lastname, email,pass,birthday) VALUES ('$a','$b','$c','$d','$e')";

if ($conn->query($sql) === TRUE) {
   header('location:login.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>