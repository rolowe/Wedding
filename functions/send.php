<?php
	include "../config/config.php"; 

	while($row = mysql_fetch_array($wedding_info)) {
		$email = $row['email'];
	}

	$to      = $email;
	$subject = $_POST['subject'];
	$message = nl2br($_POST['message']);
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$headers .= 'From: '.$_POST['mail'] . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	header('location: ../index.php');

?>
