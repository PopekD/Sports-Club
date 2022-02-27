<?php
if(isset($_POST))
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "inquiries.hsc@gmail.com";
$mailheader = "From: $email \r\n";
mail('inquiries.hsc@gmail.com', $subject, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>