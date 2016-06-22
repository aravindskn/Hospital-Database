<!DOCTYPE HTML>

<html>
	<head>
		<title>View Medicine</title>
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
					<h1><a href="medicine.php">Medicine</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
						</ul>
					</nav>
				</header>
		</div>
		<!-- View Medicine-->
		<section id="banner">
		<table>
			<tr style="text-align: center; font-weight: bold; color: black">
			<td>Medicine ID</d>
			<td>Medicine Name</td>
			<td>Quantity</th>
			
			<td>Expiry Date</td>
			<td>Type</td>
			<td>Price per Tablet</td>
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