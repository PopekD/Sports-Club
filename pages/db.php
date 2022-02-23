<?php
<<<<<<< HEAD
$servername="db";
$username="registration";
$password="password";
$dbname="registration";

// creating connection

$conn = new mysqli($servername, $username, $password, $dbname);

// checking connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 echo "Connected successfully";
?>

<!--- this file establishes the connection to the database on phpmyadmin --->
=======
$servername = "db";
$username = "root";
$password = "password";
$dbname = "hsc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
>>>>>>> cd8c410df0f4e13b143c7f6d2b10ff23f05e351b
