<?php
$servername = "localhost";
$username = "root"; // Update if you have a different username
$password = ""; // Update if you have set a password for root
$dbname = "user_auth"; // The name of the database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
