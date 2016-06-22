<!DOCTYPE HTML>

<html>
	<head>
		<title>Account</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1>Accounts</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
						</ul>
					</nav>
				</header>
			<!--Request-->	
				<section id="banner">
			
			        <center>
					<section style="text-align: center; margin-center: 50px">
					</section>
						<!-- This form takes username and password and checks it in logincheck.php -->
						<form method="post" action="logincheck.php" style="margin-top: 3em; width: 30%; padding-bottom: 2em;">
							<div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Department" name="dept_name" required />
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
					
	                			
					<section class="container">
  					<header class="box special">
					<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;">Department Budget:</h4></td>
					<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;"><?php echo $_GET['budget'];?></h4></td>
					</section>
					</header>
					<section class="container">
  					<header class="box special">
					<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;">Total Medicine Costs:</h4></td>
					<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;"><?php echo $_GET['budget'];?></h4></td>
					</section>
					</header>
					<section class="container">
  					<header class="box special">
					<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;">Total Salary of Employees:</h4></td>
					<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;"><?php echo $_GET['budget'];?></h4></td>
					</section>
					</header>
					
					<center>
					<section style="text-align: center; margin-center: 50px">
					</section>
						<!-- This form takes username and password and checks it in logincheck.php -->
						<form method="post" action="logincheck.php" style="margin-top: 3em; width: 30%; padding-bottom: 2em;">
							<div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Employee ID" name="emp_id" required />
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
					<section class="container">
  					<header class="box special">
					<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;">Salary :</h4></td>
					<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;"><?php echo $_GET['salary'];?></h4></td>
					</section>
					</header>
					
					</center>
					
					
					
					
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