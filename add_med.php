<!DOCTYPE HTML>

<html>
	<head>
		<title>Add Medicine</title>
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
					<h1><a href="Medicine.php">Medicine/Back</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							
							
						</ul>
					</nav>
				</header>
			<!-- Medicine ADD-->
			<section id="banner">
			<center>
            <h3 style="text-align: center;margin-center:50px;">Medicine Entry</h3>
						<!--<?php session_start(); echo $_SESSION[$_GET['err']]; ?>-->
							<!-- This form posts to check for errors and simultaneously to check for changed html form code -->
							<form method="post" action="medcheck.php" style="margin-top: 3em; width: 30%; padding-bottom: 2em;">
								
							<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Medicine Name" name="med_name" patterm="{0,30}" pattern="^[A-Za-z ]*$" required="" title="Only characters or spaces" />
							<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Medicine ID" name="med_id" pattern="^[0-9]$" required="" title="Only numbers" />
									
							<div>
								<div class="select-wrapper" style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%">
  								 <select id="category" name="type" style="float: left;">
  									<option>Type</option>
  									<option value="type1">Type 1</option>
  									<option value="type2">Type 2</option>
									<option value="type3">Type 3</option>
									<option value="type4">Type 4</option>
									<option value=null>None</option>
  								</select>
								</div>
							</div>
									
							<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Quantity" name="quantity" pattern="^[0-9]$" required="" title="Only numbers"/>
									
							<div>
								<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Price per Tablet" name="price_tab" pattern="^[0-9]$" required="" title="10 digit number" />
							</div>
																					
		                    <div>
								<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Exp Date" name="exp_date" />
							</div>
                            
							
							
							<div style="padding-top: 1em;">
								<ul class="actions">
								<li><input type="submit" value="Submit" name="submit" /></li>
								<li><input type="reset" value="Reset" /></li>
								</ul>
							</div>
							
							</form>
  					
				</section>
			
			
		</div>
		</center>
					<?php session_start(); echo $_SESSION[$_GET['err']]; ?>
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