<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Marat Cackley-Hughes">
	<meta name="description" content="The Ace in the Hole website aims to facilate the registering in multisport events and advertise the company.">

	<title>Contact Us</title>

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
	<div class="container">
		<br>
		<h1>Contact Us!</h1>
		<p>
			We love to hear from our community!
			Let us know your question or comment in the form below and please include if you are an athlete, volunteer, or interested party.

		</p>
		<br>
		<div class="well">
			<form action="contact_contact_form.php" method="post" id="contactForm">
				<h2 id=form_title>Contact form:</h2>
				<br>
				<label for="name">Full name:</label>
				<input type="text" id="name" name="name" placeholder="Your name here..."><br><br>
				<label for="email">Email:</label>
				<input type="text" id="email" name="email" placeholder="Your email here..."><br><br>
				<label for="comment">Leave you comment here:</label>
				<textarea id="comment" name="comment" rows="4" placeholder="Please tell us how we can help you... "></textarea>
				<input type="submit" value="Submit">
			</form>
		</div> <!-- well close-->
	</div> <!-- container close-->
	<br>	<?php include '../includes/footer.php';?>
	<script src="../js/test1.js"></script>
</body>

</html>
