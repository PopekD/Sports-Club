<?php @include('paymentserver.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    </script>
    <script src="jquery.js"></script>
    <script src="script.js"></script> 
    <title>Payment</title>
</head>
<body id="paybody">

    <main class="paymain">
        <div class="pselect"><h2>25€</h2> <h2>for</h2> <h2>1 month</h2></div>
        <div class="pselect"><h2>60€</h2> <h2>for</h2> <h2>3 months</h2></div>
        <div class="pselect"><h2>120€</h2> <h2>for</h2> <h2>12 months</h2></div>

    <form id="cform" action="payment.php" method="post" >
        <label for="cardnumber">Card Number:</label>
            <input type="text" class="line"  id="cardnumber" name="cardnumber" >
        <label for="nameofcard">Name of card:</label>
            <input type="text" class="line"  id="nameofcard" name="nameofcard" >

        <div class = "sform">
            <label for="expirydate">Expiry Date</label> <label for="securitycode" class="labelspace">Security code</label>
        </div>
        <div class = "sform">
            
                <input type="text" class="line"  id="expirydate" name="expirydate">
            
                <input type="text" class="line" id="securitycode" name="securitycode">
    </div>
        
    <input type="submit" value="Purchase" id="paymentbutton" name="paymentbutton">
    <label for="promocode">Promo Code:</label>
            <input type="text" class="line" id="promocode" name="promocode">
    
    </form>

    </main>


</body>
</html>