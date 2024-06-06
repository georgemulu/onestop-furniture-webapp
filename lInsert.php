<?php
#establish connection
include 'oneconnection.php';
#collect values from the form
include 'sFields.php';

#define the query string
$sql = "INSERT INTO admission (nameField,pass_word)VALUES ('$name','$password')";

#test the query
if (mysqli_query($conn, $sql)) {
  echo "A new record has been created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
#disconnect
mysqli_close($conn);
?>