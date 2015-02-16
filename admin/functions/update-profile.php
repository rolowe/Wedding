<?php
	include "../../config/config.php";

	$id = $_POST["id"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$bride = $_POST["bride"];
	$bride_photo = $_POST["bride_photo"];
	$groom = $_POST["groom"];
	$groom_photo = $_POST["groom_photo"];
	$date = $_POST["date"];
	$email = $_POST["email"];
	$description = $_POST["description"];
	$address = $_POST["address"];
	$acc_number = $_POST["acc_number"];
	$acc_sort = $_POST["acc_sort"];


	mysql_query("UPDATE wedding_info SET username='$username', password='$password', bride='$bride', bride_photo='$bride_photo', groom='$groom', groom_photo='$groom_photo', date='$date', email='$email', description='$description', address='$address', acc_number='$acc_number', acc_sort='$acc_sort' WHERE id='$id'");

	$rows_affected = mysql_affected_rows();
	//echo $rows_affected;

	if ($rows_affected == "1") {
		header("Location: ../our-details.php?update=success");
	} else {
		header("Location: ../our-details.php?update=failure");
	}

	

?>