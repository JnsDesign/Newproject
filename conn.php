<?php
$servername = "localhost";
$username = "jnsdesig_newpro";
$password = "qsr218ab";
$dbname = "jnsdesig_newproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>