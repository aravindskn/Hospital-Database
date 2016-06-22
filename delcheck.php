<?php
	include_once("config.php");
	if(isset($_POST['submit'])){
		$err=0;
		// pattern matches --- html form cross check --- flag = 1

		// name
		if(!preg_match("/^[A-Za-z ]*$/",$_POST['name'])){
			//echo '<h4 style="color: #d00;" >Naam</h4>';
			$err=1;
		}
		else $name=$_POST['name'];

		
		// address
		if(!preg_match("/^[A-Za-z0-9 ]*$/",$_POST['address'])){
			//echo '<h4 style="color: #d00;" >address</h4>';
			$err=1;
		}
		else $address=$_POST['address'];

		// emer_contact
		if(!preg_match("/[0-9]{10}$/",$_POST['emer_contact'])){
			//echo '<h4 style="color: #d00;" >email</h4>';
			$err=1;
		}
		else $emer_contact=$_POST['emer_contact'];

		// phone number
		if(!preg_match("/^[0-9]{10}$/", $_POST['contact'])){
			//echo '<h4 style="color: #d00;" >phoone</h4>';
			$err=1;
		}
		else $contact=$_POST['contact'];

		// gender
		$gender=$_POST['gender'];
		// insurance
		$insurance=$_POST['insurance'];

		// emer_rel
		if(!preg_match("/^[A-Za-z0-9 ]*$/",$_POST['emer_rel'])){
			//echo '<h4 style="color: #d00;" >email</h4>';
			$err=1;
		}
		else $emer_rel=$_POST['emer_rel'];
		
		// emer_name
		if(!preg_match("/^[A-Za-z0-9 ]*$/",$_POST['emer_name'])){
			//echo '<h4 style="color: #d00;" >email</h4>';
			$err=1;
		}
		else $emer_name=$_POST['emer_name'];
		
		// emer_address
		if(!preg_match("/^[A-Za-z0-9 ]*$/",$_POST['emer_address'])){
			//echo '<h4 style="color: #d00;" >email</h4>';
			$err=1;
		}
		else $emer_address=$_POST['emer_address'];
		
		// password
		if(!preg_match("/^[A-Za-z0-9 ]*$/",$_POST['password'])){
			//echo '<h4 style="color: #d00;" >email</h4>';
			$err=1;
		}
		else $password=$_POST['password'];
		
		// if flag = 0
		if($err==0){
			$name=mysqli_real_escape_string($link,$name);
			
			$address=mysqli_real_escape_string($link,$address);
			$emer_contact=mysqli_real_escape_string($link,$emer_contact);
			$contact=mysqli_real_escape_string($link,$contact);
			$gender=mysqli_real_escape_string($link,$gender);
			$insurance=mysqli_real_escape_string($link,$insurance);
			$emer_name=mysqli_real_escape_string($link,$emer_name);
			$emer_rel=mysqli_real_escape_string($link,$emer_rel);
			$emer_address=mysqli_real_escape_string($link,$emer_address);
			$password=mysqli_real_escape_string($link,$password);

			// if no field empty
			if(!empty($name)&&!empty($address)&&!empty($emer_contact)&&!empty($contact)&&!empty($gender)&&!empty($insurance)&&!empty($password)&&!empty($emer_address)&&!empty($emer_name)&&!empty($emer_rel)){

				// already registered check
	            $unicheck=mysqli_query($link,"SELECT `address`,`password`,`contact` FROM `patient` WHERE `address`='{$address}'");
				$unicheckarr=mysqli_fetch_array($unicheck);

				// if already registered
				if(!empty($unicheckarr)) header("Location: patient.php?err=006");

				// if new regitration, insert and send data to display
				else{
					$insertquery=mysqli_query($link,"INSERT INTO `patient`(`name`,`address`,`emer_contact`,`contact`,`gender`,`insurance`,'emer_address','emer_name','emer_rel','password') VALUES ('{$name}','{$address}','{$emer_contact}','{$contact}','{$gender}','{$insurance}','{$emer_address}','{$emer_name}','{$emer_rel}','{$password}')");
					$query="SELECT `id` FROM patient";
					$result=mysqli_query($link,$query);
					if($result)
						while($row=mysqli_fetch_assoc($result))
							$maxid=$row["id"];
					header("Location: del_registered.php?name=".$name."&address=".$address."&emer_contact=".$emer_contact."&contact=".$contact."&gender=".$gender."&id=".$maxid);
				}
			}
			else header("Location: patient.php?err=002"); // 002 --- field missed
		}
		elseif($err==2) header("Location: patient.php?err=003"); // 003 --- captcha
		else{header("Location: patient.php?err=004"); session_unset($_SESSION['logged_in']);} // 004 --- parameter breached --- force logout
	}
?>
