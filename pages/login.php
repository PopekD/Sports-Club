<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Log In</title>
</head>
<body>
    
    <div class="container">
=======
    <link rel="stylesheet" href="../style.css" />
    <title>Log In</title>

</head>
<body>
    <?php
		include "header.php";                
	?>
    <div class="container-form">
>>>>>>> 5bda76da323c522c21fba36aa5b39c324e44fda5
        <div class="header">
            <h2>Log In</h2>
        </div>

<<<<<<< HEAD
        <form action="signup.php" method="post">
            <div>
                <label for="username">Username :</label>
=======
        <form id="lgform" action="signup.php" method="post">
            <div>
                <label for="username">Username:</label>
>>>>>>> 5bda76da323c522c21fba36aa5b39c324e44fda5
                <input type="text" name="username" required>
            </div>

            <div>
<<<<<<< HEAD
                <label for="password">Password :</label>
                <input type="password" name="password_1" required>
            </div>

            <button type="submit" name="login_user">Log In</button>
=======
                <label for="password">Password:</label>
                <input type="password" name="password_1" required>
            </div>
            <div class="lgbutton">
            <button id="lgbutton" type="submit" name="login_user">Log In</button>
            </div>
>>>>>>> 5bda76da323c522c21fba36aa5b39c324e44fda5

            <p>Don't have the account?<a href="signup.php"> Sign Up</a></p>

        </form>
<<<<<<< HEAD










    </div>


=======
    </div>

       
	    
>>>>>>> 5bda76da323c522c21fba36aa5b39c324e44fda5
</body>
</html>