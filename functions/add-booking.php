<?php 

	include "../config/config.php"; 

	mysql_query("INSERT INTO room_booking (wedding_id, room_id, room, price, names, email, phone, extra_beds, payment_method) VALUES ('$_POST[wedding_id]', '$_POST[room_id]', '$_POST[room]', '$_POST[price]', '$_POST[names]', '$_POST[email]', '$_POST[phone]', '$_POST[extra_beds]', '$_POST[payment_method]')");


	$latest_booking = mysql_query("SELECT id FROM room_booking ORDER BY id DESC LIMIT 1");
		while($row = mysql_fetch_array($latest_booking)) {
			$booking_id = $row['id'];
			//echo $booking_id;
		}


	header("Location: ../booking-confirmation.php?id=" .$booking_id. "");

?>

