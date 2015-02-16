<?php
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		if (isset($_GET['confirm-room'])) {
			$booked_room_id = $_GET['confirm-room'];
			booking_confirm($booked_room_id);
			header('Location: manage-rooms.php');
		} 

		if (isset($_GET['cancel-booking'])) {
			$cancelled_room_id = $_GET['cancel-booking'];
			cancel_booking($cancelled_room_id);
			header('Location: manage-rooms.php');
		} 	

	}

	function booking_confirm($room_id) {
		mysql_query("UPDATE room_booking SET payment_recieved='1' WHERE room_id='$room_id'");
	}

	function cancel_booking($room_id) {
		mysql_query("DELETE FROM room_booking WHERE room_id='$room_id'");
	}

?>