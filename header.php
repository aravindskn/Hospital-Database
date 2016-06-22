<?php error_reporting(E_ERROR); ?>
<header id="header">
	<h1><a href="index.php">Hospital</h1>
	<nav id="nav">
		<ul>
			<?php
			error_reporting(E_ERROR);
			session_start();
	    if($_SESSION['login']=="logged_in")
	      echo '
	      <li><a href="reset.php">Logout</a></li>';
	    else echo'
	      <li><a href="index.php">Login</a></li>';
	    ?>
	    <li><a href="patient.php">Patient Registration</a></li>
	    <li><a href="eventreg.php">Pharmacy</a></li>
	    <li><a href="teamreg.php">Doctor Details</a></li>
	  </ul>
  </nav>
</header>
