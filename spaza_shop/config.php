<?php
$servername = "localhost";
$username = "root"; // Default username for local server
$password = ""; // Default password is empty for XAMPP and WAMP
$dbname = "spazashopdb"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
