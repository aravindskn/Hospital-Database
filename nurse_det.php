<html>
	<head>
		<title>Nurse Details</title>
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
					<h1><a href="index.php">Nurse</a> Details</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="request.php" >Request</a>
							</li>
						</ul>
					</nav>
				</header>

			<!-- Patient Details -->
				<section id="banner" >
				 <h1 style="margin-left: 30px; font-size:200%; text-align:left; color:white; ">Nurse Information: </h1>
					<section class="container">
  					<header class="box special">
					
							<table>
								<tr>
									<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;">Employee No:</h4></td>
									<td style="vertical-align: middle;"><h4 style="color: rgba(221,0,0,0.8); margin: 0px; font-weight: bold;"><?php echo $_GET['id'];?></h4></td>
								</tr>
								<tr>
									<td>Name:</td>
									<td><?php echo $_GET['name'];?></td>
								</tr>
								<tr>
									<td>Date Of Birth:</td>
									<td><?php include_once("config.php");echo $_GET['dob'];?></td>
								</tr>
								<tr>
									<td>Working Since:</td>
									<td><?php include_once("config.php");echo $_GET['working_since'];?></td>
								</tr>
								<tr>
									<td>Salary:</td>
									<td><?php include_once("config.php");echo $_GET['salary'];?></td>
								</tr>
								<tr>
									<td>Qualification:</td>
									<td><?php include_once("config.php");echo $_GET['qualification'];?></td>
								</tr>
								<tr>
									<td>Department Name:</td>
									<td><?php include_once("config.php");echo $_GET['dept_name'];?></td>
								</tr>
								<tr>
									<td>Contact:</td>
									<td><?php include_once("config.php");echo $_GET['contact'];?></td>
								</tr>
								<tr>
									<td>Working Under:</td>
									<td><?php include_once("config.php");echo $_GET['working_under'];?></td>
								</tr>
								<tr>
									<td>Shifts:</td>
									<td><?php include_once("config.php");echo $_GET['shift'];?></td>
								</tr>
		                        <tr>
									<td>Floor:</td>
									<td><?php include_once("config.php");echo $_GET['floor'];?></td>
								</tr>				
						        <tr>
									<td>Reference Name:</td>
									<td><?php include_once("config.php");echo $_GET['refer_name'];?></td>
								</tr>
								<tr>
									<td>Reference Contact:</td>
									<td><?php include_once("config.php");echo $_GET['refer_contact'];?></td>
								</tr>
								<tr>
									<td>Password:</td>
									<td><?php include_once("config.php");echo $_GET['password'];?></td>
								</tr>
						
						</table>	
					</header>
                  </section>					
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