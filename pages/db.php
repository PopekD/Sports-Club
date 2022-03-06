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

?> 
>>>>>>> 5bda76da323c522c21fba36aa5b39c324e44fda5
