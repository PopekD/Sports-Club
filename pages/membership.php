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


    <title>Membership</title>



</head>
<body>
    <?php
		include "header.php";      
        

	?>
    <div class="membershipmain">
        <div class="bm">
            <p class="bm1">Become a member of HSC!</p>
            <div class="runners"><img src="../images/runners.jpg" alt="runners"></div>
            <p class="under">Become our member and join the best team in this part of the globe! Regular classes every week + lots of extra events. We are here for you, everyone will find what they need. Football, basketball, hockey or maybe a pass to the gym, this is only part of what we offer, read the terms and conditions to learn more.</p>

        </div>
        <p class="tp">Prices</p>
        <div class="prices">  
            

            <div class="pr">1 Month = 25€</div>
            <div class="pr">3 Months = 60€<br>(20% OFF)</div>
            <div class="pr">12 Months = 180€<br>(40% OFF)</div>


        </div>

        <?php if ($logged_in) { ?>
        <div class="buypass">
            <div class="pass" ><a href="payment.php" target="_blank">Buy a pass now</a></div>
            <div class="pass"><a href="payment.php" target="_blank">Buy a pass now</a></div>
            <div class="pass"><a href="payment.php" target="_blank">Buy a pass now</a></div>
        </div>
        </div>
        <?php  } ?>

        <?php if (!$logged_in) { ?>
        <div class="buypass">
            <div class="pass" ><a href="login.php" target="_blank">Buy a pass now</a></div>
            <div class="pass"><a href="login.php" target="_blank">Buy a pass now</a></div>
            <div class="pass"><a href="login.php" target="_blank">Buy a pass now</a></div>
        </div>
        </div>
        <?php  } ?>



	    <?php
		include "footer.php";                
		?>
</body>
</html>
