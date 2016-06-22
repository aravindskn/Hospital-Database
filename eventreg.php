<!DOCTYPE HTML>
<html>
	<head>
		<title>Event Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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
							<h3>Event Registration Form</h3>
							<?php include_once("config.php");
							echo $_SERVER['HTTP_USER_AGENT'];
								session_start();
								//if invalid entry
								if(isset($_GET['err']))
									echo $_SESSION[$_GET['err']];

							// ***GETTING DELEGATE NUMBERS - FORM***

							// if number of participants submitted
							if(isset($_POST['submit2'])){
								session_start();
								$maxteam=$_SESSION['maxteam']; // get maxteam info from db

								// if entered number of participants not empty
								if(!empty($_POST['no_of_participants'])){

									// pattern match --- if not matched --- error 004 --- parameter breached --- force logout
									if(($_POST['no_of_participants']>$maxteam)||(!preg_match("/^[0-9]{1,2}$/",$_POST['no_of_participants'])))
										{ echo $_SESSION['004']; session_unset($_SESSION['logged_in']); }

									// else --- if no breach and ni of participants submitted, display delegate number form
									else{?>
										<center>
											<!--- This form takes all delegate numbers and posts to eventreg_display.php for further checks and displaying details --->
											<form method="post" action="eventreg_predisplay.php">
												<?php
												$i=0;
													while($i<>$_POST['no_of_participants']){
														echo '<input type="text" name="delegate_no'.$i.'" placeholder="Delegate No '.($i+1).'" style="margin: 7px; width: 50%;" pattern="^[0-9]*$" required="" title="Only numbers" />';
														$i++;
													}
												?>
												<input type="submit" value="Submit" style="margin: 10px;" />
											</form>
										</center>

										<!-- in case of misentry, give option to start again without entering delegate numbers --->
										<hr><h4>Or Skip to Next Registration</h4><hr>
										<?php
									}
								}

								// if number of participants empty --- 004 --- parameter breached
								else{ echo $_SESSION['004']; session_unset($_SESSION['logged_in']); }
							}

							// if number of participants not submitted yet --- store event name for use in table below
							else
								$event=$_SESSION['event']; ?>
							<iframe style="background-color: rgba(0,0,0,0); height: 100%;width: 100%;"name="frame" src="eventreg_event.php" />
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
