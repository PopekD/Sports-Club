<?php
include('server.php');
?>

<?php
if(isset($_POST))
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if(isset( $_POST['message']))
$message = $_POST['message'];


// $content="From: $name \n Email: $email \n Message: $message";
// $to = "inquiries.hsc@gmail.com";
// $mailheader = "From: $email \r\n";
// mail('inquiries.hsc@gmail.com', $subject, $content, $mailheader) or die("Error!");
// echo "Email sent!";


$contactdata2mysql = "INSERT INTO contactus_data VALUES ('0', '$name', '$email', '$subject','$message')";
// $contactfdata = "INSERT INTO contactus_data (id, c_name, c_email, c_subject, c_message) VALUES ('0', '$name', '$email', '$subject','$message')";
$output = mysqli_query($conn, $contactdata2mysql);
if($output)
        {
            echo "<h3>Thank you for messaging us, we'll contact you soon!</h3>";

        }
        else
        {
            echo "<h3> Error!</h3>";
        }

?>