<?php
$servername = "94.231.108.31";
$username = "bylang_dk";
$password = "C3pSvbGEBqEt2pGwpey8";
$dbname = "bylang_dk_db";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>