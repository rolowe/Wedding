<?php 
	session_start(); 
	if ($_SESSION['loggedIn'] != "true") {
		header("Location: index.php?auth=notloggedin");
	} 

	include "../config/config.php"; 
	include "functions/admin_functions.php";
	$booked_rooms = mysql_query("SELECT * FROM room_booking");
?>


<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=Edge" ><![endif]-->
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<title>Rooms at Orchardleigh | Save the date</title>
	<link rel="stylesheet" href="../css/rooms.css">
	<link rel="stylesheet" href="../css/admin.css">
	<script src="../js/jquery-1.7.2.min.js"></script>
</head>

	<body>

		<div class="container">

			<?php include "../controls/header.php"; ?>

			<h2>Room Bookings</h2>
			<p align="center"><a href="our-details.php">Back</a> | <a href="#" onclick="window.print();">Print Page</a></p>

			<table>
				<tr class="headings">
					<td><strong>Room</strong></td>
					<td><strong>Names</strong></td>
					<td><strong>Email</strong></td>
					<td><strong>Phone</strong></td>
					<td><strong>Extra beds</strong></td>
					<td><strong>Price</strong></td>
					<td><strong>Payment method</strong></td>
					<td><strong>Payment recieved</strong></td>
				</tr>

				<?php
					// Get all booked room info
					while($row = mysql_fetch_array($booked_rooms)) {
						$room_id = $row['room_id'];
						$room = $row['room']; 
						$price = $row['price']; 
						$names = $row['names']; 
						$email = $row['email']; 
						$phone = $row['phone']; 
						$extra_beds = $row['extra_beds']; 
						$payment_method = $row['payment_method']; 
						$payment_recieved = $row['payment_recieved']; 
				?>
				
					<tr>
						<td><?php echo $room; ?></td>
						<td><?php echo $names; ?></td>
						<td><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
						<td><?php echo $phone; ?></td>
						<td><?php echo $extra_beds; ?></td>
						<td>&pound;<?php echo $price; ?></td>
						<td><?php echo $payment_method; ?></td>
						<td>
							<?php if (empty($payment_recieved)) { ?> 
								<form action="manage-rooms.php?confirm-room=<?php echo $room_id; ?>" method="post">
									<input type="submit" value="Confirm" /> 
								</form>
								<form action="manage-rooms.php?cancel-booking=<?php echo $room_id; ?>" method="post">
									<input type="submit" value="Cancel" /> 
								</form>
							<?php } else { ?>
								Complete
							<?php } ?>
						</td>
					</tr>

				<?php } ?>
			</table>

			<p align="center"><a href="our-details.php">Back</a> | <a href="#" onclick="window.print();">Print Page</a></p>



			<?php include "../controls/footer.php"; ?>



		</div>

	</body>
</html>

