<?php

session_start();
include 'db.php';
$results2 = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$_SESSION['username']}'");
$user2 = mysqli_fetch_assoc($results2);
$results3 = mysqli_query($conn, "SELECT * FROM membership WHERE user_id = '{$user2['id']}'");
$mem = mysqli_fetch_assoc($results3);
$results4 = mysqli_query($conn, "SELECT * FROM mem_types WHERE id = '{$mem['mem_id']}'");
$mem_price = mysqli_fetch_assoc($results4);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" />
    <title>Your Profile</title>

</head>
<body>
    <?php
		include "header.php";               
	?>
<div class="profilemain">
    <div class="profile-info">
        <div class="profiledv">
            <h2>Username: <?php echo $user2['username'] ?></h2>
        </div>
        <div class="profiledv">
            <h3>First name: <?php echo $user2['first_name'] ?></h3>
        </div>
        <div class="profiledv">
            <h3>Last name: <?php echo $user2['last_name'] ?></h3>
        </div>
        <div class="profiledv">
            <h3>Email: <?php echo $user2['email']; ?></h3>
        </div>

        
        <?php if (!empty($mem)) {
            ?>  <div class="profiledv">
            <h3>Current membership price: <?php echo $mem_price['price']; ?> €</h3>
        </div>
        <div class="profiledv">
            <h3>Current membership duration: <?php echo $mem_price['time']; ?> days</h3>
        </div>
        <?php 
        } ?>


        <?php if (empty($mem)) {
            ?>   <div class="profiledv">
            <h3>Don't have a membership?</h3>
        </div>
        <div class="profilebuypass">
            <div class="profilepass" ><a href="payment.php" target="_blank">Buy a pass now</a></div>
        </div>
        <?php 
        } ?>
       
       
    </div>
</div>

      <?php include "footer.php"; ?>
	    
</body>
</html>




