<?php include('server.php') ?>

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
    <div class="container-form">
        <div class="header">
            <h2>Log In</h2>
        </div>

        <form id="lgform" action="signup.php" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password_1" required>
            </div>
            <div class="lgbutton">
            <button id="lgbutton" type="submit" name="login_user">Log In</button>
            </div>

            <p>Don't have the account?<a href="signup.php"> Sign Up</a></p>

        </form>
    </div>

       
	    
</body>
</html>