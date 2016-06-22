<?php
include_once("config.php");

// if username and password match, redirect to delegate registration page
if(isset($_POST['login'])){
	if($_POST['username']=="admin_user"&&md5($password=$_POST['password']))
    { $query=mysql_query("SELECT * FROM employee WHERE password='$password'");
	  $numrows=mysql_num_rows($query);
	  if($numrows!==0)
	  {
		while($row = mysql_fetch_assoc($query))
		 {
			$dbpassword = $row['password'];
		 }
		 if($password==$dbpassword)
		 {
			 echo "You Successfully Logged In"; 
			 $_SESSION['password'] = $password;
		 }
		 else
		 {
			 echo "Your Password is Incorrect";
		 }
	  }
	  else
	  
	  die("User Doesn't Exist");
	}
	else
	 
	  die("Please Enter Username and Password!");
		
		$_SESSION['login']="logged_in";
		header('Location: employee_det.php');
	}
    else if($_POST['username']=="admin_doctor"&&md5($password=$_POST['password']))
    {
    {   
      $query=mysql_query("SELECT * FROM employee WHERE password='$password'");
	  $numrows=mysql_num_rows($query);
	  if($numrows!==0)
	  {
		while($row = mysql_fetch_assoc($query))
		 {
			$dbpassword = $row['password'];
		 }
		 if($password==$dbpassword)
		 {
			 echo "You Successfully Logged In"; 
			 $_SESSION['password'] = $password;
		 }
		 else
		 {
			 echo "Your Password is Incorrect";
		 }
	  }
	  else
	  
	  die("User Doesn't Exist");
	}
	else
	 
	  die("Please Enter Username and Password!");
		
		session_start();
		$_SESSION['login']="logged_in";
		header('Location: doctor_det.php');
	}
	else if($_POST['username']=="admin_res"&&md5($password=$_POST['password']))
	{
	{
	  $query=mysql_query("SELECT * FROM employee WHERE password='$password'");
	  $numrows=mysql_num_rows($query);
	  if($numrows!==0)
	  {
		while($row = mysql_fetch_assoc($query))
		 {
			$dbpassword = $row['password'];
		 }
		 if($password==$dbpassword)
		 {
			 echo "You Successfully Logged In"; 
			 $_SESSION['password'] = $password;
		 }
		 else
		 {
			 echo "Your Password is Incorrect";
		 }
	  }
	  else
	  
	  die("User Doesn't Exist");
	}
	else
	 
	die("Please Enter Username and Password!");
		session_start();
		$_SESSION['login']="logged_in";
		header('Location: rescip_det.php');
	}
	else if($_POST['username']=="admin_nurse"&&md5($password=$_POST['password'])){{
	  $query=mysql_query("SELECT * FROM employee WHERE password='$password'");
	  $numrows=mysql_num_rows($query);
	  if($numrows!==0)
	  {
		while($row = mysql_fetch_assoc($query))
		 {
			$dbpassword = $row['password'];
		 }
		 if($password==$dbpassword)
		 {
			 echo "You Successfully Logged In"; 
			 $_SESSION['password'] = $password;
		 }
		 else
		 {
			 echo "Your Password is Incorrect";
		 }
	  }
	  else
	  
	  die("User Doesn't Exist");
	}
	else
	 
	  die("Please Enter Username and Password!");
		session_start();
		$_SESSION['login']="logged_in";
		header('Location: nurse_det.php');
	}
	else if($_POST['username']=="admin_pharmacy"&&md5($password=$_POST['password']))
    {
	{
	  $query=mysql_query("SELECT * FROM employee WHERE password='$password'");
	  $numrows=mysql_num_rows($query);
	  if($numrows!==0)
	  {
		while($row = mysql_fetch_assoc($query))
		 {
			$dbpassword = $row['password'];
		 }
		 if($password==$dbpassword)
		 {
			 echo "You Successfully Logged In"; 
			 $_SESSION['password'] = $password;
		 }
		 else
		 {
			 echo "Your Password is Incorrect";
		 }
	  }
	  else
	  
	  die("User Doesn't Exist");
	}
	else
	 
	  die("Please Enter Username and Password!");

		session_start();
		$_SESSION['login']="logged_in";
		header('Location: pharmacy.php');
	}
	else if($_POST['username']=="admin_account"&&md5($password=$_POST['password'])){{
	  $query=mysql_query("SELECT * FROM employee WHERE password='$password'");
	  $numrows=mysql_num_rows($query);
	  if($numrows!==0)
	  {
		while($row = mysql_fetch_assoc($query))
		 {
			$dbpassword = $row['password'];
		 }
		 if($password==$dbpassword)
		 {
			 echo "You Successfully Logged In"; 
			 $_SESSION['password'] = $password;
		 }
		 else
		 {
			 echo "Your Password is Incorrect";
		 }
	  }
	  else
	  
	  die("User Doesn't Exist");
	}
	else
	 
	  die("Please Enter Username and Password!");
		session_start();
		$_SESSION['login']="logged_in";
		header('Location: account.php');
	}
	// else display username/password mismatch error and unset login session and invariably redirect to index.php
	else{
		session_unset($_SESSION['login']);
		session_destroy();
		//header("Location: INSERT INTO `logtable` (`user_agent`, `timestamp`) VALUES ('{$_SERVER['HTTP_USER_AGENT']}', CURRENT_TIMESTAMP)");
		header('Location:index.php?err=001');
	}

?>
