<?php
#establish connection
include 'onestop.php';
#collect values from the form
include 'sFields.php';

#define the query string
$sql = "INSERT INTO sign_up_details (nname, email,password)VALUES ('$nname','$email','$password')";

#test the query
if (mysqli_query($conn, $sql)) {
  echo "A new record has been created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
#disconnect
mysqli_close($conn);
?>