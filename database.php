<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'gym_db';

// Establish connection
$conn = new mysqli($hostname, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

