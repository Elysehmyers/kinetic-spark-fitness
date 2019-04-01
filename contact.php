<!DOCTYPE HTML>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n  Message: $message";
$recipient = "contact@elysemyers.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>

<!--
	Photon by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Contact Kinetic Spark Fitness | Santa Clarita, CA</title>
		<meta name="description" content="Get the fitness results you’ve been looking for. Contact Kinetic Spark Fitness in Santa Clarita, California, at 661-317-2497 for personal training.">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main1.css" />
		<link rel="stylesheet" href="assets/css/extra1.css" />
		<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	</head>
	<body class="is-preload" id="contentPage">

	<?php include 'sideNav.php'; ?>


		<!-- Header -->

		<!-- Two -->
			<section style="background-image: url('images/contactBG.jpeg');" id="twoOurCompany" class="main styleContentPage">
				<div class="container">
					<div class="row gtr-150">
						<div class="col-12">
							<header class="">
								<h1 style="text-align: center;">Contact Kinetic Spark Fitness
									<br /> in Santa Clarita, California</h1>
								<img class="heroIcon" src="images/favicon.png" />
							</header>
						</div>
					</div>
				</div>
			</section>

			<!-- One -->
				<section id="oneOurCompany" class="main style1">
					<div class="container">
						<div class="row gtr-150">
							<div class="col-8 col-12-medium servicePageImg">
								<section>
									<form method="post" action="contact.php">
										<div class="row gtr-uniform gtr-50">
											<div class="col-6 col-12-xsmall">
												<input type="text" placeholder="Name" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" value="" placeholder="Email" />
											</div>
											<div class="col-12">
												<textarea placeholder="Enter your message" rows="6"></textarea>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit"  class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<header class="">
									<h2>Get in Touch</h2>
								</header>
								<p>
									It’s time that you meet a stronger version of yourself. Contact Kinetic Spark Fitness for personal training that will help you meet your fitness goals.
								</p>
								<p>
									Reba Wek-Lake, CSCS, MES, CES, PES, HKC, FAS
									<br />Ph: 661-317-2497

								</p>
							</div>
						</div>
						<hr />
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">
								<iframe width="100%" height="100%" frameborder="0" style="border:0;" src="https://www.google.com/maps/embed/v1/place?q=26254%20Prima%20Way%20Santa%20Clarita%2C%20CA%2091350&key=AIzaSyA9WS7SeW7EJaFm7YmswntUvIeo6nWxyUI" allowfullscreen></iframe>
							</div>
							<div class="col-4 col-12-medium">
								<header class="">
									<h2 style="" >Studio Location</h2>
									<p>
										26254 Prima Way
										<br />Santa Clarita, CA 91350
									</p>
								</header>
							</div>
						</div>
					</div>
				</section>

		<!-- Four -->
			<section style="background-image: url('images/contactBG.jpeg');" id="four" class="main styleContentPage special">
				<div class="container">

				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<div class="container">
					<header class="major">
						<h2>What Our Clients Say</h2>
					</header>
					<p class="quote">
						"Reba is exceptional. If what you want is to improve your Ironman time, she can do that. Unfortunately, that's not where I'm at. I'm an over fifty, active (would like to stay that way) woman with some past injuries. She plans a workout personalized to my needs. I believe she has helped me prevent injuries by catching problems with my mechanics early. Helpful advice on nutrition is always available, but she never makes any attempt to sell you products. Don't waste your money on a trainer at one of those big gyms who does the same boring routine with every client. If you want the most from your workout dollar, this is where you should be"
						<br /><strong style="color: black;">—Lynn M.</strong>
				</div>
				<ul class="icons">
					<li><a href="#" class="icon alt fa-phone">  661-317-2497</a></li>
					<li><a href="#" class="icon alt fa-envelope"> reba@kineticsparkfitness.com</a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Kinetic Spark Fitness</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					<li>Created by: <a href="https://webtavis.com">WebTavis Webservices</a></li>
				</ul>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/extra.js"></script>

	</body>
</html>
