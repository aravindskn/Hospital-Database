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


			<!-- Banner -->
			<!-- Main -->
				<section id="main" class="container">
					<section class="box special">
						<header class="major">
							<h3>Event Registration</h3>
							<?php include_once("config.php");
							$event=$_SESSION['event'];

							// ***DISPLAYING TEAM DETAILS - TABLE***

							// if first delegate number entered --- check if all entered
							if(isset($_POST['delegate_no0'])){
								$i=0;
								$err=0;

								// if any delegate number field empty or not set or mismatches pattern --- increment err flag
								while($i<>count($_POST)){
									if(!isset($_POST['delegate_no'.$i]))
										$err++;
									if(empty($_POST['delegate_no'.$i]))
										$err++;
									if(!preg_match("/^[0-9]*$/",$_POST['delegate_no'.$i]))
										$err++;
									$i++;
								}

								$i=0;
								$del404=0; // flag = 0 --- delegate number found ; flag = 1 --- delegate number not found

								// if err flag = 0 --- calculate total price
								if($err==0){
									$totalprice=0;
									while($i<>count($_POST)){
										$delnum=mysqli_real_escape_string($link,$_POST['delegate_no'.$i]);
										$getgender=mysqli_fetch_array(mysqli_query($link,"SELECT `gender` FROM `sp_students` WHERE `delegate_number`='".$delnum."'")); // get gender for each delegate number

										// getting gender and checking if delegate number exists
											// if gender field set --- calculate price
											if(isset($getgender[0]))
												$getprice=mysqli_fetch_array(mysqli_query($link,"SELECT `".$getgender[0]."_price` FROM `sp_event` WHERE `event_name`='".$event."'"));

											// if gender field not set --- del404 flag = 1 ; break while loop
											else{
												$del404=1;
												break;
											}

											// price calculation

											// if event is athletics (price per team)
											if($event=="Athletics")
												$totalprice=$getprice[0]; // total price is price of any one member

											// if event is not athletics (price per team member)
											else
												$totalprice=$totalprice+$getprice[0]; // total price adds to iteself the price of each member
											$i++;
										}

										// inserting to table

										// if del404 flag = 0 --- insert
										if($del404==0){

											// insert team to  team table
											$insertteam=mysqli_query($link,"INSERT INTO `sp_team`(`no_of_part`,`event`,`price`,`timestamp`) VALUES ('".count($_POST)."','".$event."','".$totalprice."',CURRENT_TIMESTAMP)");

											// get team id for current team
											$teamidquery=mysqli_query($link,"SELECT `team_id` FROM `sp_team` WHERE 1");
											while($getid=mysqli_fetch_array($teamidquery))
												$teamid=mysqli_real_escape_string($link,$getid[0]);

											// insert members to team member table
											$i=0;
											while($i<>count($_POST)){
												$delnum=mysqli_real_escape_string($link,$_POST['delegate_no'.$i]);
												$insertmember=mysqli_query($link,"INSERT INTO `sp_team_member`(`team_id`,`delegate_number`,`timestamp`) VALUES ('".$teamid."','".$delnum."',CURRENT_TIMESTAMP)");
												$i++;
											}?>

											<!-- Table to display team details --->
											<h4 style="background-color: rgba(245,245,245,0.8); border-top: 1px solid #ddd; padding: 5px; padding-bottom: 2px; margin: 0px;">
												<strong>Delegate Numbers</strong>
											</h4>
											<h4 style="background-color: rgba(245,245,245,0.8); border-bottom: 1px solid #ddd; padding: 5px; padding-top: 0px; margin: 0px; margin-bottom: 1em;"><!--</td>-->
												<?php $i=0;
												while($i<>count($_POST)){
													$delnum=mysqli_real_escape_string($link,$_POST['delegate_no'.$i]);
													echo ' '.$delnum;
													if($i<>(count($_POST)-1)) echo ',';
													$i++;
												} ?>
											</h4>
											<table>
												<tr>
													<td style="width: 33.33%;"><strong>Event:</strong></td>
													<td style="width: 33.33%;"><strong>Team ID:</strong></td>
													<td style="width: 33.33%;"><strong>Total Price to Pay:</strong></td>
												</tr>
												<tr>
													<td><?php echo $event; ?></td>
													<td style="color: #d00"><?php echo $teamid; ?></td>
													<td style="color: #d00"><?php echo $totalprice; ?></td>
												</tr>
												<tr>
											</table>
											<table>
												<tr>
													<td style="width: 100%;"><a style="color: #333; text-decoration: none; display: block; height: 100%; border: 0px;" href="eventreg.php">Done</a></td>
												</tr>
											</table>
											<?php
										}

										// if del404 flag = 1 --- display which delegate number not found in db
										else echo '<h4 style="background-color: rgba(221,0,0,0.8);color: #fff;">Delegate number '.$delnum.' does not exist.</h4>';
								}

								// if err flag = 1
								else echo $_SESSION['004']; // 004 --- parameter breached
							}
							?>
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
