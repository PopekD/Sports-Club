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
		include "header.php";                
	?>
		<main>
			<div class="content">
					<h2>Build your body <br />and mind here</h2>
				<p class="text">
					Enjoy modern sports club in the center of Hämeenlinna!<br />
					We provide gym, two huge pools, saunas and joga places.
				</p>
				<div class="operation">
					<div class="button" onclick="window.location.href='./schedule.php';">Get Started</div>
					<div class="button" onclick="window.location.href='./contact.php';"> About us</div>
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
