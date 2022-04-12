<!DOCTYPE html>
<html>

<head>
<title>Registration Progress</title>
<link rel="icon" type="image/x-icon" href="favicon.png">

<style>
.myDiv {
    border: 2px outset #000000;
  background-color: #FFF8F8;
  text-align: center;
}
</style>
</head>

<body>
<center><img src="unipi.png" class="center">
<h1 align="center">Systems Security Laboratory Users</h1>
<div class="myDiv">
<?php
$servername = "localhost";
$username = "geokal";
$password = "unipi";
$dbname = "dbunipi";
$name = $_POST['name'];
$pass = $_POST['pass'];
$email = $_POST['email'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO user (username,password,email) VALUES ('$name','$pass','$email')";

echo $sql;

if (mysqli_query($conn, $sql)) {
 echo ". New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</div><br>

<a href="index.php">Home Page</a>

</html>