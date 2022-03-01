<?php
include('server.php');

$logged_in = isset($_SESSION["username"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css" />
    <script src="cnform_script.js"></script> 
    <title>Contact us</title>
</head>
<body>
    <?php
		include "header.php";                
	?>
        <div class="contactmain">
            <div class="contactinfo">
                <div class="CU">Contact us</div>
                <p class="normalt1" > Tell us your problem and help us to improve the services:</p>
                <form id="contact-form" class="contact-form" name="contact-form" action="contactform_mail.php" method="POST" >
                <div class="status" id="status" style="color:red"></div><br>
        <div class="row">
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="name" class="">Your name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <label for="email" class="">Your email:</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0">
                    <label for="subject" class="">Subject:</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                    
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="md-form">
                    <label for="message">Your main message:</label>
                    <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="text-center text-md-left">
        <a class="btn btn-primary" onclick="validatecn_form();">Send</a>
        </div>
    </form>

                <div class="BT">
                        <div class="BT1">E-mail: inquiries@hsc.fi</div>
                        <div class="BT1">Phone: +358 50 4750203</div>
                    </div>
                    
                    <div class="CT">
                        <div class="Office">
                            <p class="normalt">Or directly at our office:</p>
                            <p class="bold">Hämeenlinna, Puusepänkatu 5 <br>We are open Monday till Friday 8:00 - 22:00  </p>
                        </div>
                        <div class="SC">
                            <p class=normalt>HSC in social media</p>
                            <p class="SC1">Facebook:@hsc_fi <br> 
                            TikTok:@hsc_fi 
                        </div>
                        <div class="SC2">
                            <p>Instagram:@hsc_fi <br>
                            Linkedin:@hsc_fi
                            </p>
                        </div>

                    </div>

            </div>
      
            <div class="contactimage"><img src="../images/contactimage.jpg" alt="building"></div>
        </div>
	    <?php
		include "footer.php";                
		?>
</body>
</html>