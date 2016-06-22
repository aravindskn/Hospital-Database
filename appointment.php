<!DOCTYPE HTML>

<html>
	<head>
		<title>Appointments</title>
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
					<h1>Appointments</h1>
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
					
						<form method="post" action="patient_det.php" style="margin-top: 3em; width: 30%; padding-bottom: 2em;">
							<div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Doctor Name" name="doc_name" required />
									
								</div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Date" name="adate" required />
									
								</div>
								<div>
									<input style="background-color: rgba(200,200,200,0.6);color: rgba(38,38,38,1);font-weight: bold !important; width=30%" type="text" placeholder="Time" name="time" required />
									
								</div>
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
		</div>
        
     <?php
	include_once("config.php");
	if(isset($_POST['submit'])){
		$err=0;
		// pattern matches --- html form cross check --- flag = 1

		// doc_name
		if(!preg_match("/^[A-Za-z ]*$/",$_POST['doc_name'])){
			//echo '<h4 style="color: #d00;" >Naam</h4>';
			$err=1;
		}
		else $doc_name=$_POST['doc_name'];

		
		// adate
		if(!preg_match("/^[A-Za-z0-9 ]*$/",$_POST['adate'])){
			//echo '<h4 style="color: #d00;" >address</h4>';
			$err=1;
		}
		else $adate=$_POST['adate'];

		// time
		if(!preg_match("/[0-9]{10}$/",$_POST['time'])){
			//echo '<h4 style="color: #d00;" >email</h4>';
			$err=1;
		}
		else $time=$_POST['time'];

		// patient_id
		if(!preg_match("/^[0-9]{10}$/", $_POST['patient_id'])){
			//echo '<h4 style="color: #d00;" >phoone</h4>';
			$err=1;
		}
		else $patient_id=$_POST['patient_id'];
				
		// if flag = 0
		if($err==0){
			$doc_name=mysqli_real_escape_string($link,$doc_name);
			$adate=mysqli_real_escape_string($link,$adate);
			$time=mysqli_real_escape_string($link,$time);
			$patient_id=mysqli_real_escape_string($link,$patient_id);
			
			// if no field empty
			if(!empty($doc_name)&&!empty($adate)&&!empty($time)&&!empty($patient_id)){

				// already registered check
	            $unicheck=mysqli_query($link,"SELECT `doc_id`,`time` FROM `appointment` WHERE `time`='{$time}'");
				$unicheckarr=mysqli_fetch_array($unicheck);

				// if already registered
				if(!empty($unicheckarr)) header("Location: appointment.php?err=006");

				// if new regitration, insert and send data to display
				else{
					$insertquery=mysqli_query($link,"INSERT INTO `appointment`(`doc_name`,`adate`,`time`,`patient_id`) VALUES ('{$doc_name}','{$adate}','{$time}','{$patient_id}')");
					$query="SELECT `adate` FROM appointment";
					$result=mysqli_query($link,$query);
					if($result)
						while($row=mysqli_fetch_assoc($result))
							$maxid=$row["adate"];
					header("Location: appointment_registered.php?$doc_name=".$doc_name."&adate=".$adate."&time=".$time."&patient_id=".$patient_id."&adate=".$maxid);
				}
			}
			else header("Location: appointment.php?err=002"); // 002 --- field missed
		}
		elseif($err==2) header("Location: appointment.php?err=003"); // 003 --- captcha
		else{header("Location: appointment.php?err=004"); session_unset($_SESSION['logged_in']);} // 004 --- parameter breached --- force logout
	}
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