<?php include "config/config.php"; ?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=Edge" ><![endif]-->
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	
	<title>Save the date | <?php echo $bride; ?> and <?php echo $groom; ?> are getting married</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/master.css">
	
</head>

<body>


	<body id="index" class="booking-success">
	
		<!-- #main -->
		<div id="main">
		
			<!-- #Container -->
			<div id="container">

				<h1><?php echo $bride; ?> and <?php echo $groom; ?> are getting married</h1>


				<div id="contact">
					<div class="before"></div>
					
					<h3>Your room booking request has been sent</h3>

						<?php

						$booking_id = $_GET["id"];
						$booked_room = mysql_query("SELECT * FROM room_booking WHERE wedding_id = '$id' AND id = '$booking_id' ");

							while($row = mysql_fetch_array($booked_room)) {
								$room_id = $row['room_id'];
								$room = $row['room'];
								$price = $row['price']; 
								$names = $row['names'];
								$email = $row['email'];
								$phone = $row['phone']; 
								$extra_beds = $row['extra_beds']; 
								$payment_method = $row['payment_method']; 
							}
							

						?>



						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td width="40%" valign="top">
									<p><strong>Booking Details:</strong></p>
									<p>
										<strong>Room name:</strong> <?php echo $room; ?><br/>
										<strong>Price:</strong> &pound;<?php echo $price; ?><br/>
										<strong>Extra Beds:</strong> <?php echo $extra_beds; ?><br/>
									</p>
								</td>
								<td width="40%" valign="top">
									<p><strong>Your Details:</strong></p>
									<p>
										<strong>Names:</strong> <?php echo $names; ?><br/>
										<strong>Email:</strong> <?php echo $email; ?><br/>
										<strong>Phone:</strong> <?php echo $phone; ?><br/>
									</p>
								</td>
							</tr>
						</table>
						

					<?php 
						if ($payment_method == 'Bank Transfer') {
							echo "<p>You have decided to pay using Online Banking. Please use the following details to make the payment of &pound;". $price .":</p><p><strong>Account Number:</strong> ". $acc_number . "<br /><strong>Sort Code: </strong> ". $acc_sort .".</p>";
						}
						if ($payment_method == 'Cheque') {
							echo "<p>You have decided to pay by Cheque. Please send a cheque for &pound;". $price ." to:</p><p><strong>" . $address . "</strong><br />And make the cheque payable to: ". $groom . " &amp; " . $bride . ".</p>";
						}
					?>


					<p>* Please note that final room allocation will be decided by the Bride &amp; Groom.<br />
					** Your room booking will not be confirm until payment has been recieved by the Bride &amp; Groom.</p>


					<p style="float:right;"><a href="rooms.php">Return to Rooms Page ></a></p>

					<p style="float:right;"><a href="#" onclick="window.print();">Print Page</a> | <a href="http://<?php echo DEEP_LINK; ?>" class="bookmark" title="Orchardleigh Room Booking | <?php echo $room; ?>">Add Page to Bookmarks</a></p>
				
					<div class="after"></div>
				</div>
			



			</div>
		</div>


<script src="js/jquery.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
