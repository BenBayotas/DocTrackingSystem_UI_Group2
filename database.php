<?php
// DB conn params
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'dts';

// Establish conn
$conn = new mysqli($hostname, $username, $password, $database);

// Check conn
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>