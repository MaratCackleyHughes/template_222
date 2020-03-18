<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Marat Cackley-Hughes"> 
	<meta name="description" content="The Ace in the Hole website aims to facilate the registering in multisport events and advertise the company.">
	<meta name="keywords" content="triathlons , multisport events, Portland, Oregon, inclusion, diversity, health, well being, cycling, running, swimming">

	<title>Volunteer</title>

	<script src="https://use.fontawesome.com/d810ac7e6a.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<!-- https://www.internetkultur.at/simple-hamburger-drop-down-menu-with-css-and-jquery/ -->
	<link rel="stylesheet" type="text/css" href="../css/offcanvas.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/navigation_desktop.css">

	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:500|Libre+Baskerville&display=swap" rel="stylesheet">

</head>

<body>
	<?php include '../includes/header.php';?>
   <div class="wrapper">
	<div class="container">
		<br>
		<h1>It takes a village…
		</h1>
		<br>

		<img src="../img/ace18.jpg" alt="view of people running from above">
		<p>

			Here at Ace in the Hole we always welcome volunteers. In fact our volunteers are what make our events so special. If you are interested in volunteering please fill out the form below and let us know how you might like to help, or, what special skills you might have. Just like our events we welcome volunteers of all abilities.

		</p>

		<div class="well">
			<form action="volunteer_contact_form.php" method="post" id="volunteerForm">
				<h2 id=form_title>Volunteer contact form:</h2>
				<br>
				<label for="name">Full name:</label>
				<input type="text" id="name" name="name" placeholder="Your name here..."><br><br>
				<label for="email">Email:</label>
				<input type="text" id="email" name="email" placeholder="Your email here..."><br><br>
				<label for="comment">Tell us about yourself and how you might like to help:</label>
				<textarea id="comment" name="comment" rows="4" placeholder="Write more here..."></textarea>
				<input type="submit" value="Submit">
			</form>
		</div> <!-- well close-->
		<br>
		</div> <!-- close the wrapper-->
	</div> <!-- container close-->
	<?php include '../includes/footer.php';?>
	<script src="../js/test1.js"></script>
</body>

</html>
