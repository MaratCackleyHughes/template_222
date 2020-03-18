<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Contact Us</title>

	<script src="https://use.fontawesome.com/d810ac7e6a.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<!-- https://www.internetkultur.at/simple-hamburger-drop-down-menu-with-css-and-jquery/ -->
	<link rel="stylesheet" type="text/css" href="css/offcanvas.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/navigation_desktop.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">

	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:500|Libre+Baskerville&display=swap" rel="stylesheet">

</head>

<body>
	<?php include 'includes/header.php';?>
	<div class="container">
		<h1>Ace in the Hole Multi Sport Events
		</h1>
		<p>Ut nulla eros, interdum vel tempus vel, tincidunt at mi. In pretium ligula vitae eros sollicitudin, sed tincidunt arcu tempus. Vivamus egestas tellus at libero aliquet, eget pulvinar dui iaculis. Nam finibus felis magna, non consectetur elit gravida ac. Vivamus ornare libero quis tristique mattis. Aenean ullamcorper sed est eu hendrerit. Aenean pretium justo ut quam mattis, quis suscipit metus lacinia. Donec eleifend interdum dui in efficitur. Fusce imperdiet mollis lacus et egestas. Integer congue bibendum diam in elementum.
		</p>

		<p>Ut nulla eros, interdum vel tempus vel, tincidunt at mi. In pretium ligula vitae eros sollicitudin, sed tincidunt arcu tempus. Vivamus egestas tellus at libero aliquet, eget pulvinar dui iaculis. Nam finibus felis magna, non consectetur elit gravida ac. Vivamus ornare libero quis tristique mattis. Aenean ullamcorper sed est eu hendrerit. Aenean pretium justo ut quam mattis, quis suscipit metus lacinia. Donec eleifend interdum dui in efficitur. Fusce imperdiet mollis lacus et egestas. Integer congue bibendum diam in elementum.
		</p>

		<div class="well">
			<form action="contact_contact_form.php" method="post" id="contactForm">
				<h2 id=form_title>Contact form:</h2>
				<br>
				<label for="name">Full name:</label>
				<input type="text" id="name" name="name"><br><br>
				<label for="email">Email:</label>
				<input type="text" id="email" name="email"><br><br>
				<label for="comment">Leave you comment here:</label>
				<textarea id="comment" name="comment" rows="4">Please tell us how we can help you... </textarea>
				<input type="submit" value="Submit">
			</form>
		</div> <!-- well close-->
	</div> <!-- container close-->
	<?php include 'includes/footer.php';?>
	<script src="js/test1.js"></script>
</body>

</html>
