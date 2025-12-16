<?php include("sesion.php"); ?>

<?php

include("config.php");

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
telefono VARCHAR(15),
codigo VARCHAR(6),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)==false) {
  echo "Error creating table: " . mysqli_error($conn);
} else {
  echo "Table MyGuests created successfully";
}

// Close connection
mysqli_close($conn);

?> 

<?php include("footer.html"); ?>