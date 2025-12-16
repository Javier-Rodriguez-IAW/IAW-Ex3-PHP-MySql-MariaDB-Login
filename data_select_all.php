<?php include("sesion.php"); ?>

<?php

include("config.php");

//Lanzamos la consulta
$sql = "SELECT id, firstname, lastname, telefono, codigo FROM MyGuests";
$result = mysqli_query($conn, $sql);

if ($result==false) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
elseif (mysqli_num_rows($result) > 0) {
  // Fetch all results as an associative array
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  //Para probar como es la información obtenida de la base de datos.
  print "<pre>";
  print_r($rows);
  print "</pre>";

  // Use foreach to iterate
  foreach ($rows as $row) {
  echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . " - Telefono: " . $row["telefono"] . " - Codigo: " . $row["codigo"] . "<br>";
  }
} else {
  echo "0 results";
}

// Close connection
mysqli_close($conn);
?>

<?php include("footer.html"); ?>