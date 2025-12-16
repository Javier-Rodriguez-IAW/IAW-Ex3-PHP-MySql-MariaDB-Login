<?php include("sesion.php"); ?>

<?php

include("config.php");

//Insert data in the table MyGuests
$sql = "INSERT INTO MyGuests (firstname, lastname, email, telefono, codigo)
VALUES ('John', 'Doe', 'john@example.com', '123456789', 'a12345')";

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
else {
    echo "New record created successfully";
}

// Close connection
mysqli_close($conn);
?>

<?php include("footer.html"); ?>