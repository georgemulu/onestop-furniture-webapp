<?php
$nname=$_POST['nname'];
$email=$_POST['email'];
$password=$_POST['password'];
echo "Data from the form picked successfully</br>";
// Check if 'nname' key exists in $_POST array
if (isset($_POST['nname'])) {
    // Assign the value of 'nname' to $nname variable
    $nname = $_POST['nname'];

    // Proceed with using $nname variable
    // You can perform further operations with $nname here
    echo "Data from the form picked successfully</br>";
} else {
    // Handle the case when 'nname' key is not set in $_POST array
    echo "Error: 'nname' key is not set in the POST data.";
}


?>