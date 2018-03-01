<?php
/* servername = "localhost";
$username = "root";
$password = "root";
$dbname = "job";*/

// Create connection
$conn = new mysqli("localhost", "root", "root", "job");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>