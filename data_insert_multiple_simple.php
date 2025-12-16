<?php include("sesion.php"); ?>

<?php

include("config.php");

// Prepare the multiple query
$sql = "INSERT INTO MyGuests (firstname, lastname, email, telefono, codigo)
VALUES ('John', 'Doe', 'john@example.com', '123456789', 'a12345');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, telefono, codigo)
VALUES ('Mary', 'Moe', 'mary@example.com', '987654321', 'a54321);";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, telefono, codigo)
VALUES ('Julie', 'Dooley', 'julie@example.com', '1234567891', 'a67890')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?> 

<?php include("footer.html"); ?>