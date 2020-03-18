<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Marat Cackley-Hughes">
	<meta name="description" content="The Ace in the Hole website aims to facilate the registering in multisport events and advertise the company.">
	<meta name="keywords" content="triathlons, multisport events, Portland, Oregon, inclusion, diversity, health, well being, cycling, running, swimming">

	<title>Ace in the Hole Events</title>

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
		<h1 class="space_out_heading">Ace&nbsp;in&nbsp;the&nbsp;Hole&nbsp;Multi&nbsp;Sport&nbsp;Events</h1>

		<h2 class="space_out_heading"><a href="#form_top">Sign up now for the Multisport Weekend!</a> </h2>
		<p>This years event will be held on March 28th and 29th, 2020
		</p>

		<h3>About the event</h3>
		<p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.
			<br>
			There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
		<h1>Starting times</h1>
		<div class="two_colums">
			<ul>
				<h3>Saturday</h3>
				<li>Long Course Triathlon</li>
				<li>7:00 AM</li>
				<li>Olympic Triathlon</li>
				<li>7:30 AM</li>
				<li>10K</li>
				<li>7:15 AM</li>
				<li>Half Marathon</li>
				<li>7:15 AM</li>
			</ul>
			<ul>
				<h3>Sunday</h3>
				<li>Sprint Triathlon</li>
				<li>8:00 AM</li>
				<li>Try-a-Tri</li>
				<li>8:20 AM</li>
				<li>Splash n Dash</li>
			</ul>
		</div>
		<img src="../img/ace4.jpg" class="item3" alt="athletes running into open water">

		<h2>Registration</h2>
		Long Course: $240<br>
		Olympic: $110<br>
		10K: $50<br>
		Half Marathon: $75<br>
		Sprint: $90<br>
		Try-a-Tri: $65<br>
		<p>*For a more detailed description of each events see our <a href="../about/#course_details">course&nbsp;details</a> page.</p>

		<h2>Cost Includes</h2>
		<ul>
			<li>Food & Beer</li>
			<li>Access to the weekend's live entertainment & Fitness Expo</li>
			<li>Commemorative Finisher medal</li>
			<li>Accurate Chip Timing for competitive races</li>
			<li>Ace in the Hole Multisport Weekend Tech Shirt</li>
			<li>Post-event party & entertainment</li>
		</ul>
		<p>NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
		<h2>Packet pick up</h2>
		<p>
			All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up.
		</p>
		<div class="well">
			<h2 id="form_top">Register now!</h2>
			<br>
			<form action="sample_contact_form.php" method="post" id="eventsForm">
				<label for="fname"> First Name:</label><br>
				<input type="text" id="fname" name="fname" placeholder="Your first name...">
				<br><br>
				<label for="lname"> Last Name:</label><br>
				<input type="text" id="lname" name="lname" placeholder="Your last name...">
				<br><br>
				<label for="age">Age:</label><br>
				<input type="number" id="age" name="age" placeholder="Your age here...">
				<br><br>
				<label for="email">E-mail:</label><br>
				<input type="text" id="email" name="email" placeholder="Your e-mail...">
				<br> <br>
				<label for="emercontact"> Emergency Contact Person:</label><br>
				<input type="text" id="emercontact" name="emercontact" placeholder="Emergency name...">
				<br><br>
				<label for="emerphone">Emergency phone number:</label><br>
				<input type="tel" id="emerphone" placeholder="e.g. 123-456-7890" name="emerphone" pattern="\d{3}[\-]\d{3}[\-]\d{4}}">
				<br><br>
				<label for="events">Choose your event: Saturday</label><br>
				<select id="events" form="eventsForm" size="1" name="events">
					<option value="halfmarathon">Half Marathon</option>
					<option value="10k">10K</option>
					<option value="olympic">Olympic</option>
					<option value="longcourse">Long Course</option>
				</select>
				<br><br>
				<label for="events2">Choose your event: Sunday</label><br>
				<select id="events2" form="eventsForm" size="1" name="events2">
					<option value="try-a-tri">Try-a-Tri</option>
					<option value="sprint">Sprint</option>
					<option value="splashndash">Splash n Dash</option>
				</select>
				<br> <br>

				<label for="gender">Gender:</label><br>
				<select id="gender" form="eventsForm" size="1" name="gender">
					<option value="Non-binary">Non-binary</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				<br> <br>
				<label for="comment">Special Accommodations:</label><br>
				<textarea id="comment" name="comment" rows="4" placeholder="Let us know if you have any special needs..."></textarea>
				<input type="submit" value="Submit">
			</form>
		</div><!-- closes the well class -->
		<br>
		<p>
			Visit our <a href="../about/#faqs" target="_self">FAQS page</a> for more information and rules of the race. Also see the <a href="../about/#what_to_bring"> what to bring page</a> for a detail list of what you will need to bring the day of the race so you are as prepared as you need to be for you best performance.
		</p>
		<br>
		<div class="two_colums">
			<h2> Weather</h2>
			<div id="openweathermap-widget-14"></div>
			<script>
				window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
				window.myWidgetParam.push({
					id: 14,
					cityid: '5746545',
					appid: 'a8c5fb4ab1a64518d1a5ce86afbf0ef3',
					units: 'imperial',
					containerid: 'openweathermap-widget-14',
				});
				(function() {
					var script = document.createElement('script');
					script.async = true;
					script.charset = "utf-8";
					script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(script, s);
				})();

			</script>
		</div>
		<p>
			Changes in the weather can affect your performance greatly. We highly recommend that you pay close attention to the weather forecast and plan accordingly. Being prepared for the prevailing weather conditions can impact if you finish the event or not. Watch the weather closely. The show goes on no matter what the weather is doing.
		</p>
		<br>
	</div><!-- closes the container class -->
	<?php include '../includes/footer.php';?>
	<script src="../js/test1.js"></script>
</body>

</html>
