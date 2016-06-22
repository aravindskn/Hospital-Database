<html>
	<head>
		<title>Patient Details</title>
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
					<h1><a href="index.php">Patient</a> Details</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="appointment.php" >Appointments</a></li>
							<li><a href="compsugg.php">Compliants/Suggestion</a></li>
							<li><a href="patient.php">Patient Registration</a></li>
						</ul>
					</nav>
				</header>

			<!-- Patient Details -->
				<section id="banner" >
                  <h3 style="margin-left: 30px;  text-align:left; color:white; ">Enter Patient ID: </h3>
			        <center>
					<section style="text-align: center; margin-center: 50px">
					</section>
					<div>
						<!-- This form takes username and password and checks it in logincheck.php -->
						<form method="post" action="logincheck.php" style="margin-top: 3em; width: 30%; padding-bottom: 2em;">
							<div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Patient ID" name="patient_id" required />
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

				 <h1 style="margin-left: 30px; font-size:200%; text-align:left; color:white; ">Patient Information: </h1>
					<section class="container">
  					<header class="box special">
					
					
							<table>
								<tr>
								<td>Patient No:</h4></td>
								</tr>
								<tr>
								<td>Name:</td>
								</tr>
								<tr>
								<td>Gender:</td>
								</tr>
								<tr>
								<td>Contact:</td>
								</tr>
								<tr>
								<td>Address:</td>
								</tr>
								<tr>
								<td>Emergency Contact Name:</td>
								</tr>
								<tr>
								<td>Emergency Contact Number:</td>
								</tr>
								<tr>
								<td>Insurance:</td>
								</tr>
								<tr>
								<td>Doctor ID:</td>
								</tr>
								<tr>
								<td>Room ID:</td>
								</tr>
				 <?php

					 include_once("config.php");
				     if(!empty($_POST['patient_id']))
				     {
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
							            <td><?php echo $mem_gendetails['gender']; ?></td>
							            <td><?php echo $mem_gendetails['contact']; ?></td>
							            <td><?php echo $mem_gendetails['address']; ?></td>
							            <td><?php echo $mem_gendetails['emer_name']; ?></td>
							            <td><?php echo $mem_gendetails['emer_contact']; ?></td>
							            <td><?php echo $mem_gendetails['insurance']; ?></td>
							            <td><?php echo $mem_gendetails['doctor_id']; ?></td>
							            <td><?php echo $mem_gendetails['room_id']; ?></td>
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
							    }
							  ?>



					</div>		
					</header>
                  </section>					
			</section>
			</div>	
				
				
				
		<!-- MED RECORD -->
		<div>
		   <section>
            <h1 style="margin-left: 30px; font-size:200%; text-align:left; color:white; " >Medical Records</h1>
            <table align="left">
			<tr style="text-align: center; font-weight: bold;">
			<td>Record ID</d>
			<td>Record Date</td>
			<td>Doctor ID</th>
			
			<td>Medical Number</td>
			<td>Symptoms</td>
			<td>Diagnosis</td>
			<td>Prescription<td>
			<td>Room ID</td>
			<td>IN Date</td>
			<td>OUT Date</td>
    
         	</tr>
			<?php
			 include_once("config.php");
		     if(!empty($_POST['patient_id']))
		     {				        
										$getdel_no=mysqli_query($link,"SELECT `patient_id` FROM `med_record` WHERE `patient_id`='".$_POST['patient_id']."'");
							      while($del_no=mysqli_fetch_array($getdel_no))
							     {
							        $getmem_gendetails=mysqli_query($link,"SELECT * FROM `patient` WHERE `id`='".$del_no['id']."'");
							        while($mem_gendetails=mysqli_fetch_array($getmem_gendetails))
							        {
							         ?>
							          <tr>
							           <!--<td><?php echo $del_no['id'];?></td>-->
							            <td><?php echo $mem_gendetails['rec_id']; ?></td>
							            <td><?php echo $mem_gendetails['rec_date']; ?></td>
							            <td><?php echo $mem_gendetails['doc_id']; ?></td>
							            <td><?php echo $mem_gendetails['med_id']; ?></td>
							            <td><?php echo $mem_gendetails['symptoms']; ?></td>
							            <td><?php echo $mem_gendetails['diagnosis']; ?></td>
							            <td><?php echo $mem_gendetails['prescrip_id']; ?></td>
							            <td><?php echo $mem_gendetails['room_id']; ?></td>
							            <td><?php echo $mem_gendetails['in_date']; ?></td>
							            <td><?php echo $mem_gendetails['out_date']; ?></td>
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
							    }
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