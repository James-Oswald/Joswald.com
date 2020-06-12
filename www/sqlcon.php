<?php
$servername = "68.196.165.171";
$username = "jozwald";
$password = "teddyt11";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>