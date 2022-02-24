<header>
    <h3 class="logo"><a href="index.php">HSC</a></h3>
    <div class="menu1">
        <a href="index.php">Home</a>
        <a href="schedule.php">Schedule</a>
        <a href="membership.php">Membership</a>
        <a href="contact.php">Contact</a>
    </div>
    <div class="login">
		<?php
		$logged_in = isset($_SESSION["username"]);
		if ($logged_in) {
			echo "<a href='logout.php'>Log Out</a>";
		} else {
			echo "<a href='signup.php'>Sign Up</a>";
			echo "<a href='login.php'>Log In</a>";
		}
		?>

    </div>
    <section class="top-nav">
        <div class="logo2">
            <h3> HSC </h3>
        </div>
        <input id="menu-toggle" type="checkbox"/>

        <label class='menu-button-container' for="menu-toggle">

            <span class='menu-button'></span>
        </label>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="membership.php">Membership</a></li>
            <li><a href="schedule.php">Schedule</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="#" class="reg">Sign Up</a></li>
            <li><a href="#" class="reg">Log In</a></li>
        </ul>
    </section>
</header> 