<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Home Page</title>
</head>
<body>
<?php require 'header.php' ?>

<?php 
session_start();
echo $_SESSION["name"];
echo "<center><h1>This is admin page</h1><br>";
$servername = "localhost";
$username = "root";
$password = "Ishita@2002";
$dbname = "lampdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from login;";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
    $x=$row['name'];
    $y=$row['user'];
    if( $row['registered']==0){
        echo "New user ".$row['name']."---    <a href='newuser.php?name=$x'>Add</a><br><br>";
    }
    if( $row['registered']==1){
        echo "Show information of ".$row['name']."---    <a href='update.php?name=$x'>Show</a><br><br>";
    }
    }
}
else {
    echo "No Login Data";
}
$conn->close();
include 'navigation.php';
echo "</center><br><br>";
?>

<?php include 'footer.php' ?>
</body>
</html>