<?php
$servername = "178.62.14.183";
$username = "mysqlusr";
$password = "191456Gg";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>