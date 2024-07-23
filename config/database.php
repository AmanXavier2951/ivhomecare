<?php
// Database configuration
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ivhomecare";

// live configuration
$servername = "localhost";
$username = "u185860992_ivhomecareuser";
$password = "User1@password";
$dbname = "u185860992_ivhomecare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
