<?php
$servername="db";
$username="registration";
$password="password";
$dbname="registration";
// creating connection
$conn = new mysqli($servername, $username, $password, $dbname);

// checking connection
if ($conn->connect_error)
    die("Connection failed: ".$conn->connect_error);
?>