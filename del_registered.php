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

			<!-- Main -->
				<section id="main" class="container">
					<section class="box special">
  					<header class="major">
  						<h2 style="margin-bottom: 30px;">Patient Registration</h2>
							<table>
								<tr>
									<td>Patient No:</td>
									<td><?php echo $_GET['id']; ?></td>
								</tr>
								<tr>
									<td>Name:</td>
									<td><?php echo $_GET['name']; ?></td>
								</tr>
								<tr>
									<td>Gender:</td>
									<td><?php echo $_GET['gender']; ?></td>
								</tr>
								<tr>
									<td>Contact:</td>
									<td><?php echo $_GET['contact']; ?></td>
								</tr>
								<tr>
									<td>Address:</td>
									<td><?php echo $_GET['address']; ?></td>
								</tr>
								<tr>
									<td>Emergency Contact:</td>
									<td><?php echo $_GET['emer_contact']; ?></td>
								</tr>
								<tr>
									<td>Emergency Contact Name:</td>
									<td><?php echo $_GET['emer_name']; ?></td>
								</tr>
								<tr>
									<td>Doctor ID:</td>
									<td><?php echo $_GET['doc_id']; ?></td>
								</tr>
							</table>
							<table>
								<tr>
									<td style="width: 100%;"><a style="color: #333; text-decoration: none; display: block; height: 100%; border: 0px;" href="patient_det.php">Done</a></td>
								</tr>
							</table>
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
