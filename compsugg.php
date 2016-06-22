<!DOCTYPE HTML>

<html>
	<head>
		<title>Compliants/Suggestions</title>
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
					<h1>Compliants/Suggestions</h1>
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
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Search" name="search" required />
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
    <?php
	include_once("config.php");
	if(isset($_POST['login']))
	{
		$err=0;
		// pattern matches --- html form cross check --- flag = 1

		// search
		if(!preg_match("/^[A-Za-z ]*$/",$_POST['search']))
		{
			//echo '<h4 style="color: #d00;" >Naam</h4>';
			$err=1;
		}
		else $search=$_POST['search'];
		// if flag = 0
		if($err==0)
		{
			$search=mysqli_real_escape_string($link,$search);
			
			// if no field empty
			if(!empty($search)){

				// if new regitration, insert and send data to display
				{
					$insertquery=mysqli_query($link,"INSERT INTO `compsugg`(`giver_id`) VALUES ('{$search}')");
					$query="SELECT `giver_id` FROM compsugg";
					$result=mysqli_query($link,$query);
					if($result)
						while($row=mysqli_fetch_assoc($result))
							$maxid=$row["id"];
					header("Location: compsugg.php?$name=".$giver_id."&id=".$maxid);
				}
			}
			else header("Location: compsugg.php?err=002"); // 002 --- field missed
		}
		elseif($err==2) header("Location: compsugg.php?err=003"); // 003 --- captcha
		else{header("Location: compsugg.php?err=004"); session_unset($_SESSION['logged_in']);} // 004 --- parameter breached --- force logout
	}
?>
					
					<section style="text-align: center; margin-center: 50px">
					</section>
						<!-- This form takes username and password and checks it in logincheck.php -->
						<form method="post" action="logincheck.php" style="margin-top: 3em; width: 30%; padding-bottom: 2em;">
							<div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Compliants/Suggestions" name="compsugg" required />
								</div>
								
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<ul class="actions">
										<li>
											<input style="height: 3em;" tabindex="-1" type="submit" name="comp" value="comp" />
										</li>
									</ul>
								</div>
							</div>
						</form>
					<?php
	include_once("config.php");
	if(isset($_POST['comp']))
	{
		$err=0;
		// pattern matches --- html form cross check --- flag = 1

		// search
		if(!preg_match("/^[A-Za-z ]*$/",$_POST['comp']))
		{
			//echo '<h4 style="color: #d00;" >Naam</h4>';
			$err=1;
		}
		else $search=$_POST['comp'];
		// if flag = 0
		if($err==0)
		{
			$search=mysqli_real_escape_string($link,$search);
			
			// if no field empty
			if(!empty($search)){

				// if new regitration, insert and send data to display
				{
					$insertquery=mysqli_query($link,"INSERT INTO `compsugg`(`consugg`) VALUES ('{$comp}')");
					$query="SELECT `giver_id` FROM compsugg";
					$result=mysqli_query($link,$query);
					if($result)
						while($row=mysqli_fetch_assoc($result))
							$maxid=$row["id"];
					header("Location: compsugg.php?$name=".$giver_id."&id=".$maxid);
				}
			}
			else header("Location: compsugg.php?err=002"); // 002 --- field missed
		}
		elseif($err==2) header("Location: compsugg.php?err=003"); // 003 --- captcha
		else{header("Location: compsugg.php?err=004"); session_unset($_SESSION['logged_in']);} // 004 --- parameter breached --- force logout
	}
?>
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