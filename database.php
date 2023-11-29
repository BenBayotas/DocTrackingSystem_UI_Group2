<?php

// Database connection parameters
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'dts';

// Attempt to establish a connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// If you reached this point, the connection is successful
// You can perform database operations using $conn

?>
