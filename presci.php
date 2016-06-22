<!DOCTYPE HTML>

<html>
	<head>
		<title>Prescription</title>
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
					<h1>Prescription</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							
							</li>
							
						</ul>
					</nav>
				</header>
				
			<!--Prescription-->
			<section id="banner">
			
			<center>
					<section style="text-align: center; margin-center: 50px">
					</section>
						<!-- This form takes username and password and checks it in logincheck.php -->
						<form method="post" action="logincheck.php" style="margin-top: 3em; width: 30%; padding-bottom: 2em;">
							<div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Medicine Name" name="med_name" required />
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
					
					
					
			<!-- Med Record-->
            <h3>Med Records</h3>			
			<table>
			<tr style="text-align: center; font-weight: bold;color:black;">
			<td>Prescription ID</d>
			<td>Patient ID</td>
			<td>Doctor ID</td>
			<td>Medicine Number</td>
			<td>Medical ID</td>
			<td>Expiry ID</td>
			<td>Expiry Date</td>
			<td>Intake<td>
			<td>Duration</td>
			<td>Bought</td>
			<td>Quantity</td>
    
         	</tr>
							        <?php
										$getdel_no=mysqli_query($link,"SELECT `patient_id` FROM `med_record` WHERE `patient_id`='".$_POST['patient_id']."'");
							      while($del_no=mysqli_fetch_array($getdel_no))
							     {
							        $getmem_gendetails=mysqli_query($link,"SELECT * FROM `patient` WHERE `id`='".$del_no['id']."'");
							        while($mem_gendetails=mysqli_fetch_array($getmem_gendetails))
							        {
							         ?>
							          <tr>
							           <td><?php echo $del_no['id'];?></td>
							            <td><?php echo $mem_gendetails['name']; ?></td>
							            <td><?php echo $mem_gendetails['contact']; ?></td>
							            <td><?php echo $mem_gendetails['gender']; ?></td>
							            <td><?php echo $mem_gendetails['address']; ?></td>
							         <?php
							            $getmem_eventdetails=mysqli_query($link,"SELECT `event` FROM `sp_team` WHERE `team_id`='".$_POST['team_id']."'");

							          	while($mem_eventdetails=mysqli_fetch_array($getmem_eventdetails))
							          	{
							            	echo
								            '<td>'.$mem_eventdetails['event'].'</td>
								        </tr>';


								        }
								    }
								 }
								    echo
							    	'</table>';
							    
							  ?>		
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