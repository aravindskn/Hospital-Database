<!DOCTYPE HTML>
<html>
	<head>
		<title>Patient Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<style>
		input::-webkit-input-placeholder { /* WebKit, Blink, Edge */
			color:rgba(80,80,80,0.75) !important;
			font-weight: bold !important;
		}
		input:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
			 color:rgba(80,80,80,0.75) !important;
			 font-weight: bold !important;
		}
		input::-moz-placeholder { /* Mozilla Firefox 19+ */
			 color:rgba(80,80,80,0.75) !important;
			 font-weight: bold !important;
		}
		input:-ms-input-placeholder { /* Internet Explorer 10-11 */
			color:rgba(80,80,80,0.75) !important;
			font-weight: bold !important;
		}
		input:placeholder-shown { /* Standard (https://drafts.csswg.org/selectors-4/#placeholder) */
			color:rgba(80,80,80,0.75) !important;
			font-weight: bold !important;
		}
		</style>
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
	        <header id="header" class="alt">
					<h1><a href="index.php">Patient</a> Details</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Patient Registration</a></li>
						</ul>
					</nav>
		    </header>
			<?php include("exceptionhandle.php"); ?>
			

			<!-- Body -->
			<section id="banner" style="text-align: center; ">
		    <h2>Patient</h2>
				
					<center>
					<section style="text-align: center; margin-center: 50px">
					<h3>Login</h3> 
					</section>
						<!-- This form takes username and password and checks it in logincheck.php -->
						<form method="post" action="logincheck.php" style="margin-top: 3em; width: 30%; padding-bottom: 2em;">
							<div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Username" name="username" required />
								</div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important;" type="password" placeholder="Password" name="password" required />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<ul class="actions">
										<li>
											<input style="height: 3em;" tabindex="-1" type="submit" name="login" value="Submit" />
										</li>
									</ul>
								</div>
							</div>
						</form>
					</center>
					
		  </section>

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
