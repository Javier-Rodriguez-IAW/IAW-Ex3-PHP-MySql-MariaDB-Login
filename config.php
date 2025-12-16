<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

$servername = "localhost";
$username = "jrr";
$password = "jrr";
$dbname = "bd_w3_jrr2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>