<?php 
	session_start(); 
	session_destroy() 
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


				<form action="functions/auth.php" method="post" class="login">
					<h2>User login</h2>
					<p><label>Username:</label> <input type="text" name="username" id="username"></p>
					<p><label>Password:</label> <input type="password" name="password" id="password"></p>
					<p><input type="submit" class="button" value="login" /></p>
					
					<?php
						if (isset($_GET["auth"])) {
						$auth = $_GET['auth'];
							if ($auth == "invalid") {
								echo ("<span class='error'>Invalid login details. Please try again</span>");
							}
							else if ($auth == "notloggedin") {
								echo ("<span class='error'>You need to be logged in to view this page</span>");
							}
						}
					?>

					<p><a href="../index.php">&lt; Back to home</a></p>
				</form>


			<?php include "../controls/footer.php"; ?>

		</div>
	</body>

</html>