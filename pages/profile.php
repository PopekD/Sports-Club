<?php

session_start();
include 'db.php';
$results2 = mysqli_query($conn, "SELECT * FROM users WHERE username = '{$_SESSION['username']}'");
$user2 = mysqli_fetch_assoc($results2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css" />
    <title>Log In</title>

</head>
<body>
    <?php
		include "header.php";               
	?>
    <div class="profile-info">
        <div class="header">
            <h2>Username: <?php echo $user2['username'] ?></h2>
        </div>
        <div class="header">
            <h3>First name: <?php echo $user2['first_name'] ?></h3>
        </div>
        <div class="header">
            <h3>Last name: <?php echo $user2['last_name'] ?></h3>
        </div>
        <div class="header">
            <h3>Email: <?php echo $user2['email']; ?></h3>
        </div>
    </div>

       
	    
</body>
</html>




