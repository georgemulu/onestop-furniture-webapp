<?php
session_start();

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Group15";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your HTML form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the HTML form
    $uname = $_POST["uname"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $ustate = $_POST['ustate'];
    $zip_code = $_POST['zip_code'];
    $uaddress = $_POST['uaddress'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO admission (uname, country, city, ustate, zip_code, uaddress) VALUES ('$uname', '$country', '$city', '$ustate', '$zip_code','$uaddress')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['form_msg'] = "Sign up successful!";
        header("location: address_book.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>