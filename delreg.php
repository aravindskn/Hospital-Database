<!DOCTYPE HTML>
<html>
	<head>
		<title>Patient Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body class="landing">
		<div id="page-wrapper" class="bgtest" style="padding: 18em 0em 0em 0em;">

			<!-- Header -->
			<?php include("header.php"); ?>
			<?php include("sesscheck.php"); ?>
			<?php include("exceptionhandle.php"); ?>

			<!-- Main -->
			<section id="main" class="container">
				<section class="box special">
  				<header class="major">
  					<h2 style="margin-bottom: 30px;">Patient Registration</h2>
						<?php session_start(); echo $_SESSION[$_GET['err']]; ?>
							<!-- This form posts to check for errors and simultaneously to check for changed html form code -->
							<form method="post" action="delcheck.php">
								<div class="row uniform 50%">
									<div class="6u 12u(mobilep)">
										<input type="text" placeholder="Name" name="name" patterm="{0,30}" pattern="^[A-Za-z ]*$" required="" title="Only characters or spaces" />
									</div>
									<div class="6u 12u(mobilep)">
										<input type="text" placeholder="Patient Number" name="id" pattern="^[0-9]{10}$" required="" title="Only numbers" />
									</div>
								</div>
								<div class="row uniform 50%">
									<div class="6u 12u(mobilep)">
										<div class="select-wrapper">
  									  <select id="category" name="insurance" style="float: left;">
  											<option>Insurance</option>
  											<option value="type1">Type 1</option>
  											<option value="type2">Type 2</option>
											<option value="type3">Type 3</option>
											<option value="type4">Type 4</option>
											<option value=null>None</option>
  										</select>
										</div>
									</div>
									<div class="6u 12u(mobilep)">
										<input type="text" placeholder="Address" name="address" />
									</div>
								</div>
								<div class="row uniform 50%">
									<div class="6u 12u(mobilep)">
										<input type="text" placeholder="Phone Number" name="contact" pattern="^[0-9]{10}$" required="" title="10 digit number" />
									</div>
									<div class="6u 12u(mobilep)">
										<div class="select-wrapper">
  									  <select id="category" name="gender" style="float: left;">
  											<option>Gender</option>
  											<option value="male">Male</option>
  											<option value="female">Female</option>
  										</select>
										</div>
									</div>
								</div>
								
								<div class="row uniform">
									<div style="padding-top: 1em;" class="12u">
										<ul class="actions">
											<li><input type="submit" value="Submit" name="submit" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
  					</header>
				</section>
			</section>
			<?php include("footer.php"); ?>
		</div>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/jquery.scrollgress.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
	</body>
</html>
