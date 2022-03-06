<?php
include('server.php');
session_start();

if(isset($_SESSION['username'])){
<<<<<<< HEAD

    $_SESSION['msg'] = "You must log in first to view this page";
    header("location : login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
=======
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="../style.css" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>HSC - the place your body needs</title>
        </head>
        <body>
        <?php
            include "headerlogged.php";                
        ?>
        <!-- addd -->
            <main>
                <div class="content">
                    <h2>Build your body <br />and mind here</h2>
                    <p class="text">
                        Enjoy modern sports club in the center of Hämeenlinna!<br />
                        We provide gym, two huge pools, saunas and joga places.
                    </p>
                    <div class="operation">
                        <!-- onclick these two buttons will take to the schedule and contact pages: -->
                        <div class="button" onclick="window.location.href='./schedule.php'">Get Started</div>
                        <div class="button" onclick="window.location.href='./contact.php'">About us</div>
                    </div>
                    <div class="personal"><img src="../images/personal.jpg" alt="personal-trainetrs" /></div>
                </div>
    
                <div class="image"><img src="../images/gym.jpg" alt="gym" /></div>
            </main>
            <div class="about">
                <h1>What is HSC?</h1>
                <div class="CN">
                    <div class="C1">3rd most popular <br />sports center in Finland</div>
                    <div class="C2">Customer-focused and <br />innovative training club</div>
                    <div class="C3">A place where people <br />can start their new life</div>
                </div>
                <div class="gym2"><img src="../images/gym2.jpg" alt="gym" /></div>
            </div>
            <?php
            include "footer.php";                
            ?>
        </body>
    </html>
    <?php
>>>>>>> 5bda76da323c522c21fba36aa5b39c324e44fda5
}

?>

<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>This is the homepage</h1>
    <?php
    if(isset($_SESSION['success'])) : ?>
    <div>
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);

            ?>
        </h3>
    </div>

    <?php endif ?>

<?php if(isset($_SESSION['username'])) : ?>
    <h3>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></h3>

    <button><a href="login.php?logout='1'">Log Out</a></button>

    <?php endif ?>
</body>
=======

>>>>>>> 5bda76da323c522c21fba36aa5b39c324e44fda5
</body>
</html>