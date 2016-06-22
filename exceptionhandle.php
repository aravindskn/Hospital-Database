<?php
	session_start();
	$_SESSION['000']='';
	$_SESSION['001']='<center><h3 style="background-color: rgba(221,0,0,0.4);color: #fff;">Wrong Username/Password</h3>';
	$_SESSION['002']='<center><h4 style="background-color: rgba(221,0,0,0.8);color: #fff;">All fields are compulsary</h4>';
	$_SESSION['003']='<center><h4 style="background-color: rgba(221,0,0,0.8);color: #fff;">Please check your captcha response</h4>';
	$_SESSION['004']='<center><h4 style="background-color: rgba(221,0,0,0.8);color: #fff;">Parameter Breached</h4>';
	$_SESSION['005']='<center><h4 style="background-color: rgba(221,0,0,0.8);color: #fff;">Wrong Username/Password</h4>';
	$_SESSION['006']='<center><h4 style="background-color: rgba(221,0,0,0.8);color: #fff;">You have already registered</h4>';
	$_SESSION['007']='<center><h4 style="background-color: rgba(221,0,0,0.8);color: #fff;">This event is not for your gender</h4>';
?>
