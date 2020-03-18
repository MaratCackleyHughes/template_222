<!DOCTYPE html>
<html lang="en">

<head>
	<title>Portland Historical Tour Reservations</title>
	<meta name="description" content="Reserve your spot for a historical Portland Tour. Prices range from $50 to $80 per person.">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href=../project.css>
	<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
	<div id="wrapper">
		<?php include '../includes/header.inc.html.php'; ?>

		<?php include '../includes/navigation.inc.html.php'; ?>
		<main>
			<h1>Book a Reservation</h1>
			<div id="source">Required fields are marked with an asterisk (*).</div>
			<div id="reservations">
				<form method="post" action=" ">
					 <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
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
					<label for="ename"> Emergency Contact:</label><br>
					<input type="text" id="ename" name="ename" placeholder="Emergency name..">
					<br><br>
					<label for="phone">Emergency phone number:</label><br>
					<input type="tel" id="ephone" name="phone" pattern="\d{3}[\-]\d{3}[\-]\d{4}}">
					<br>
					<label for="events">Choose your event:</label><br>
					<select id="events">
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
					<select id="gender">
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
			</div>
		</main>
		<?php include '../includes/footer.inc.html.php'; ?>

	</div>
</body>

</html>
