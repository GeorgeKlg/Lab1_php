<!DOCTYPE html>
<html>

<head>
<title>Get Data</title>
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
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
 echo "Username: " . $row["username"]. " - Password: " . $row["password"]." - Email: " . $row["email"]. "<br>";
 }
} else {
 echo "There are no results, try to insert some data first";
}
mysqli_close($conn);
?>
</body>
</div><br>

<a href="index.php">Home Page</a>

</html>