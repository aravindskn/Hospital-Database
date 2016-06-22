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
	
			<?php include("exceptionhandle.php"); ?>
			

			<!-- Body -->
			<section id="banner" style="text-align: center;">
		    <h2>Patient</h2>
											
		<center>
							
  					<h3 style="text-align: center;margin-center:50px;">Patient Registration</h3>
						<!--<?php session_start(); echo $_SESSION[$_GET['err']]; ?>-->
							<!-- This form posts to check for errors and simultaneously to check for changed html form code -->
							<form method="post" action="delcheck.php" style="margin-top: 3em; width: 30%; padding-bottom: 2em;">
								
							<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Name" name="name" patterm="{0,30}" pattern="^[A-Za-z ]*$" required="" title="Only characters or spaces" />
							<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Patient Number" name="id" pattern="^[0-9]{10}$" required="" title="Only numbers" />
									
							<div>
								<div class="select-wrapper" style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%">
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
									
							<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Address" name="address" />
									
							<div>
								<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Phone Number" name="contact" pattern="^[0-9]{10}$" required="" title="10 digit number" />
							</div>
									
							<div class="select-wrapper" style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%">
							  <select id="category" name="gender" style="float: left;">
  									<option>Gender</option>
  									<option value="male">Male</option>
  									<option value="female">Female</option>
  							  </select>
							</div>
							
		                    <div>
								<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Emergency Contact" name="emer_contact" />
							</div>
                            
							<div>
								<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Emergency Name" name="emer_name" />
							</div>
							
							<div>
								<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Emergency Contact Relation" name="emer_rel" />
							</div>
							
							<div>
								<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Emergency Contact Address" name="emer_address" />
							</div>
							
							<div>
								<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Password" name="password" />
							</div>
							
							<div style="padding-top: 2em;">
								<ul class="actions">
								<li><input type="submit" value="Submit" name="submit" /></li>
								<li><input type="reset" value="Reset" /></li>
								</ul>
							</div>
							
							</form>
  					
				</section>
           			
			
		</div>
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
