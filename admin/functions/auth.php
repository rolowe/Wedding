<?php
	session_start(); // Start a new session
	include ('../../config/config.php');

	// Get the data passed from the form
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Do some basic sanitizing
	$username = stripslashes($username);
	$password = stripslashes($password);

	$sql = "select * from wedding_info where username = '$username' and password = '$password'";
	$result = mysql_query($sql) or die ( mysql_error() );

	$count = 0;

	while ($line = mysql_fetch_assoc($result)) {
		 $count++;
	}

	if ($count == 1) {
		 $_SESSION['loggedIn'] = "true";
		 header("Location: ../our-details.php");
	} else {
		 $_SESSION['loggedIn'] = "false";
		 header("Location: ../index.php?auth=invalid");
	}

?>

