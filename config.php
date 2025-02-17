<?php
// config.php: This file contains the database connection settings

$servername = "localhost"; // MySQL server
$username = "root"; // MySQL username
$password = ""; // MySQL password
$dbname = "online_store"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
