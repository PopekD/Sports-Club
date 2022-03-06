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
    <title>Schedule</title>
</head>
<body>
    <?php
		include "header.php";                
	?>
        <div class="schedulemain">
            <div class="scheduleleft">
                <p class="WH">Working hours</p>
                    <div class="girlworkout"> <img src="../images/illustration2.png" alt="workout"></div>
                <p class="problems">Faced problems with a schedule?<br>Please, contact us at <b>schedule@hsc.fi</b></p>

            </div>
            <div class="scheduleright">
                <div class="SR">
                        <div class="time">Monday: 8:00-22:00</div>
                        <div class="time">Tuesday: 8:00-22:00</div>
                        <div class="time">Wednesday: 8:00-22:00</div>
                        <div class="time">Thursday: 8:00-22:00</div>
                        <div class="time">Friday: 8:00-22:00</div>
                        <div class="time">Saturday: 10:00-20:00</div>
                        <div class="time">Sunday: 10:00-20:00</div>
                </div>
            </div>
        </div>
	    <?php
		include "footer.php";                
		?>
</body>
</html>