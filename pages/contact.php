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
                
                                
<div class=form-border>
        <form id="contact-form" class="contact-form" name="contact-form" action="contactform_mail.php" method="POST" autocomplete="off" target="_blank">		
		<br><div class="status" id="status" style="color:red"></div>
		<div>
		<label for="name">Your name:</label><br>
		<input type="text" id="name" name="name" class="form-control" placeholder="(required field)">
		</div>

		<div>
			<label for="email">Your email:</label><br>
			<input type="text" id="email" name="email" class="form-control" placeholder="(e.g. xxx@yyyyy.com)">
		</div>
		
		<div>		          
			<label for="subject">Subject:</label><br>
			<input type="text" id="subject" name="subject" class="form-control" placeholder="(required field)">
		</div>
		
		<div>		          
			<label for="message">Your message:</label>
			<textarea type="text" id="message" name="message" class="form-control" placeholder="(max 2000 characters)"></textarea> 
		</div>
		
		<div>		 
        <a class="button button-fsend" onclick="validatecn_form();"> &nbsp &nbsp Send &nbsp &nbsp</a>
        <input type="reset" class="button button-freset">
		</div>

		</form>
</div>
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
                            <p class=normalt>HSC in social media:</p>
                            <p class="SC1">Facebook:@hsc_fi <br> 
                            TikTok:@hsc_fi </p>
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