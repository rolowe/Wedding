<?php 
	session_start(); 
	if ($_SESSION['loggedIn'] != "true") {
		header("Location: index.php?auth=notloggedin");
	}

	include "../config/config.php"; 
	include "functions/admin_functions.php";
	$wedding_info = mysql_query("SELECT * FROM wedding_info");
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

	<body class="admin">

		<div class="container">

			<?php include "../controls/header.php"; ?>

			<h2>Our Details</h2>

			<?php
				// Get all wedding info
				while($row = mysql_fetch_array($wedding_info)) {
					$id = $row['id'];
					$username = $row['username']; 
					$password = $row['password']; 
					$bride = $row['bride']; 
					$bride_photo = $row['bride_photo']; 
					$groom = $row['groom']; 
					$groom_photo = $row['groom_photo']; 
					$date = $row['date']; 
					$email = $row['email']; 
					$description = $row['description'];
					$address = $row['address'];
					$acc_number = $row['acc_number'];
					$acc_sort = $row['acc_sort'];
			?>

				<form action="functions/update-profile.php" method="POST" class="edit-profile">
					<input type="hidden" name="id" value="<?php echo $id; ?>" />
					<p><label>Username:</label><input type="text" name="username" value="<?php echo $username; ?>" /></p>
					<p><label>Password:</label><input type="password" name="password" value="<?php echo $password; ?>" /></p>
					<p><label>Bride:</label><input type="text" name="bride" value="<?php echo $bride; ?>" /></p>
					<p><label>Bride Photo:</label><input type="text" name="bride_photo" value="<?php echo $bride_photo; ?>" /></p>
					<p><label>Groom:</label><input type="text" name="groom" value="<?php echo $groom; ?>" /></p>
					<p><label>Groom Photo:</label><input type="text" name="groom_photo" value="<?php echo $groom_photo; ?>" /></p>
					<p><label>Date:</label><input type="text" name="date" value="<?php echo $date; ?>" /></p>
					<p><label>Email:</label><input type="text" name="email" value="<?php echo $email; ?>" /></p>
					<p><label>Description:</label><input type="text" name="description" value="<?php echo $description; ?>" /></p>
					<p><label>Address:</label><input type="text" name="address" value="<?php echo $address; ?>" /></p>
					<p><label>Bank account number:</label><input type="text" name="acc_number" value="<?php echo $acc_number; ?>" /></p>
					<p><label>Bank account sort code:</label><input type="text" name="acc_sort" value="<?php echo $acc_sort; ?>" /></p>
					<p><input type="submit" class="button" value="Update" /></p>
				</form>
		
			<?php } ?>


			<?php include "functions/admin-menu.php"; ?>

			<?php include "../controls/footer.php"; ?>


		</div>

	</body>
</html>

