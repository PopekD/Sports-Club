<?php
$servername = "172.18.0.4";
$port = 3306;
$username = "root";
$password = "password";
$dbname = "HSC";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 