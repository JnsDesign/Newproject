<?php
$servername = "localhost";
$username = "jnsdesig_ste";
$password = "qsr218ab";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>