<?php include("sesion.php"); ?>

<?php

include("config.php");

// Prepare statement
$stmt = mysqli_prepare($conn, "INSERT INTO MyGuests (firstname, lastname, email, telefono, codigo) VALUES (?, ?, ?, ?, ?)");

// Bind parameters
mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $telefono, $codigo);

// Set parameters and execute first record
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$telefono = "123456789";
$codigo = "u12345";
mysqli_stmt_execute($stmt);

// Second record
$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$telefono = "987654321";
$codigo = "u54321";
mysqli_stmt_execute($stmt);

// Third record
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$telefono = "1234567890";
$codigo = "u67890";
mysqli_stmt_execute($stmt);

echo "New records created successfully";

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<?php include("footer.html"); ?>