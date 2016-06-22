<?php
include_once("config.php");

// if username and password match, redirect to delegate registration page
if(isset($_POST['login'])){
	if($_POST['username']=="admin_user"&&md5($_POST['password'])=="7adc785be4a31eff6783871ff63e18f1"){
		$log=mysqli_query($link,"INSERT INTO `logtable` (`user_agent`, `timestamp`) VALUES ('".$_SERVER['HTTP_USER_AGENT']."', CURRENT_TIMESTAMP)");
		session_start();
		$_SESSION['login']="logged_in";
		header('Location: patient_det.php');
	}

	// else display username/password mismatch error and unset login session and invariably redirect to index.php
	else{
		session_unset($_SESSION['login']);
		session_destroy();
		//header("Location: INSERT INTO `logtable` (`user_agent`, `timestamp`) VALUES ('{$_SERVER['HTTP_USER_AGENT']}', CURRENT_TIMESTAMP)");
		header('Location:index.php?err=001');
	}
}
?>
