<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="jquery.js"></script>
    <script src="script.js"></script> 
    <title>Payment</title>
</head>
<body>

    <main class="paymain">
        <div class="pselect" onclick="animation()">1 Month for only 25€</div>
        <div class="pselect" onclick="animation()">3 Months for only 60€</div>
        <div class="pselect" onclick="animation()">12 Months for only 180€</div>

    <form class="cform">
        <label>Card Number:</label>
            <input type="text" class="line" >
        <label>Name of card:</label>
            <input type="text" class="line" >

        <div class = "sform">
            <label >Expiry Date</label> <label class="labelspace">Security code</label>
        </div>
        <div class = "sform">
            
                <input type="text" class="line" >
            
                <input type="text" class="line" >
    </div>
        
    <input type="submit" value="Pay">
    
    </form>

    </main>

</body>
</html>