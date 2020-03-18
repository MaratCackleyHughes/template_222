<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Ace in the Hole</title>

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

		<img src="img/ace4.jpg" class="item3" alt="athletes running into open water">


		<p>Ut nulla eros, interdum vel tempus vel, tincidunt at mi. In pretium ligula vitae eros sollicitudin, sed tincidunt arcu tempus. Vivamus egestas tellus at libero aliquet, eget pulvinar dui iaculis. Nam finibus felis magna, non consectetur elit gravida ac. Vivamus ornare libero quis tristique mattis. Aenean ullamcorper sed est eu hendrerit. Aenean pretium justo ut quam mattis, quis suscipit metus lacinia. Donec eleifend interdum dui in efficitur. Fusce imperdiet mollis lacus et egestas. Integer congue bibendum diam in elementum.
		</p>
		<div class="well">
			<form action="sample_contact_form.php" method="post" id="eventsForm">
				<label for="fname"> First Name:</label><br>
				<input type="text" id="fname" name="fname" placeholder="Your first name..">
				<br><br>
				<label for="lname"> Last Name:</label><br>
				<input type="text" id="lname" name="lname" placeholder="Your last name..">
				<br><br>
				<label for="age">Age:</label><br>
				<input type="number" id="age" name="age">
				<br><br>
				<label for="email">E-mail:</label><br>
				<input type="text" id="email" name="email" placeholder="Your e-mail..">
				<br> <br>
				<label for="emercontact"> Emergency Contact:</label><br>
				<input type="text" id="emercontact" name="emercontact" placeholder="Emergency name..">
				<br><br>
				<label for="emerphone">Emergency phone number:</label><br>
				<input type="tel" id="emerphone" placeholder="e.g. 123-456-7890" name="emerphone" pattern="\d{3}[\-]\d{3}[\-]\d{4}}">
				<br>
				<label for="events">Choose your event:</label><br>
				<select id="events" form="eventsForm" size="1" name="events">
					<option value="try-a-tri">Try-a-Tri</option>
					<option value="sprint">Sprint</option>
					<option value="halfmarathon">Half Marathon</option>
					<option value="10k">10K</option>
					<option value="olympic">Olympic</option>
					<option value="longcourse">Long Course</option>
					<option value="splashndash">Splash n Dash</option>
				</select>
				<br> <br>

				<label for="gender">Gender:</label><br>
				<select id="gender" form="eventsForm" size="1" name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Non-binary">Non-binary</option>
				</select>
				<br> <br>

				<label for="comment">Comment:</label><br>
				<textarea id="comment" name="comment">Put your comment here.</textarea>
				<br> <br>

				<input type="submit" value="Submit">
			</form>
		</div><!-- closes the well class -->
	</div><!-- closes the container class -->
	<?php include 'includes/footer.php';?>
	<script src="js/test1.js"></script>
</body>

</html>
