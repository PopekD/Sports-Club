<?php
include('server.php');
?>
<?php
// this active code is to send email and insert data into database using localhost
// phpmailer is added to send email from contact form data besides adding it to database
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST))
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];
if(isset( $_POST['message']))
$message = $_POST['message'];


require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

// smptp configuration    
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "inquiries.hsc@gmail.com";
    $mail->Password = 'passwordhsc123';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $senderemail="Sender Email: ";
    $sendername="Sender Name: ";
    $Sbjt="Subject: ";
    $mail->isHTML(true);
    //sender
    $mail->setFrom($email, $sendername.$name);
    //recipient
    $mail->addAddress("inquiries.hsc@gmail.com");
    //email content
    
    $mail->Subject = ("$senderemail $email ($Sbjt $subject)");
    $mail->Body = $message;

    
    if($mail->send()){
    $contactdata2mysql = "INSERT INTO contactus_data VALUES ('0', '$name', '$email', '$subject','$message')";
    $output = mysqli_query($conn, $contactdata2mysql);
    echo "<h3>Thank you for messaging us, we'll contact you soon!</h3>";
        
    }
    else
    {
        echo $status2 = "Could not send email.<br> ";
        echo $response = "Something went wrong.<br> Error: <br>" . $mail->ErrorInfo;
    }


    // this commented code is being used on live server as shell.hamk for mail function though data can be inserted on both hosts:
// if(isset($_POST))
// if(isset( $_POST['name']))
// $name = $_POST['name'];
// if(isset( $_POST['email']))
// $email = $_POST['email'];
// if(isset( $_POST['subject']))
// $subject = $_POST['subject'];
// if(isset( $_POST['message']))
// $message = $_POST['message'];

// $namenemail='from: '.$name;
//     $namenemail.=', email: '.$email;
//     if (mail ('inquiries.hsc@gmail.com', $namenemail, 'message-body: '.$message)){
//     $contactdata2mysql = "INSERT INTO contactus_data VALUES ('0', '$name', '$email', '$subject','$message')";
//     $output = mysqli_query($conn, $contactdata2mysql);
//     echo "<h3>Thank you for messaging us, we'll contact you soon!</h3>";
        
//     }
//     else
//     {
//         echo $status2 = "Could not send email.<br> ";
//         echo $response = "Something went wrong.<br> Error: <br>";
    

?>