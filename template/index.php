<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Untitled Document</title>

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
		<h1>Sed maximus rhoncus tellus sed interdum.
		</h1>
		<p>Ut nulla eros, interdum vel tempus vel, tincidunt at mi. In pretium ligula vitae eros sollicitudin, sed tincidunt arcu tempus. Vivamus egestas tellus at libero aliquet, eget pulvinar dui iaculis. Nam finibus felis magna, non consectetur elit gravida ac. Vivamus ornare libero quis tristique mattis. Aenean ullamcorper sed est eu hendrerit. Aenean pretium justo ut quam mattis, quis suscipit metus lacinia. Donec eleifend interdum dui in efficitur. Fusce imperdiet mollis lacus et egestas. Integer congue bibendum diam in elementum.
		</p>
		<div class="well">
			<form action="/action_page.php">
				<fieldset>
					<legend> Sign up now:</legend>
					First name:<br>
					<input type="text" name="firstname" value="*"><br>
					Last name:<br>
					<input type="text" name="lastname" value="*"><br><br>
					Email:<br>
					<input type="email" name="email" value="*"><br><br>
					Choose an event:<br>
					<input type="radio" name="eventone" value="male" checked> Male<br>
					<input type="radio" name="eventtwo" value="female"> Female<br>
					<input type="radio" name="eventthree" value="other"> Other<br><br>
					Tell us about yourself:<br>
					<textarea name="message">write more here...</textarea><br>
					<button type="submit">Submit</button>
					<!-- <input type="submit" value="Submit"> -->
				</fieldset>
			</form>
		</div><!-- closes the well class -->
	</div><!-- closes the container class -->
	<?php include 'includes/footer.php';?>
	<script src="js/test1.js"></script>
</body>

</html>
