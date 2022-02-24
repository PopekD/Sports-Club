<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    
    <div class="container">
        <div class="header">
            <h2>Register</h2>
        </div>

        <form action="signup.php" method="post">

        <?php include ('errors.php') ?>
            <div>
                <label for="first_name">First name:</label>
                <input type="text" name="first_name" required>
            </div>

            <div>
                <label for="last_name">Last name:</label>
                <input type="text" name="last_name" required>
            </div>

            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" required>
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password_1" required>
            </div>

            <div>
                <label for="password">Confirm your password:</label>
                <input type="password" name="password_2" required>
            </div>

            <button type="submit" name="reg_user">Register</button>

            <p>Already a user?<a href="login.php"> Log In</a></p>

        </form>



    </div>


</body>
</html>