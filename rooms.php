<?php include "config/config.php"; ?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=Edge" ><![endif]-->
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	
	<title>Rooms at Orchardleigh | Save the date</title>

	<link rel="stylesheet" href="css/rooms.css">
	<script src="js/jquery-1.7.2.min.js"></script>

	<!-- fancybox -->
	<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="fancybox/jquery.easing-1.3.pack.js"></script>
	<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

	<script src="js/jquery.validate.min.js"></script>

	<!-- custom font -->
	<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
</head>
<body>
	

		<?php include "controls/navigation.php"; ?>


		<!-- #Container -->
		<div class="container">

			<?php include "controls/header.php"; ?>
		

			<div class="intro">
				<h2>Accommodation in the House</h2>
				<p>Orchardleigh House can sleep 101 people, and we do have 10 extra beds which can be placed in certain rooms to your requirements. Maximum age for extra beds is 15yrs. See below how many single beds will fit into each room.</p><br />
				<p>Accommodation in the House is available from 1pm but most rooms will be available by 12  noon. On your Wedding day all rooms in the Main House must be taken before booking lodges. Rooms in the Main House must be vacated by 10 am. All accommodation in the House and on the Estate are subject to change, so please contact us when you allocate your rooms and lodges.</p>
			</div>

			<?php include "controls/room-list.php"; ?>
				
			

			<!-- Footer -->
				<?php include "controls/footer.php"; ?>
			<!-- END Footer -->
		
		</div>
		<!-- END #Container -->



		<script src="js/scripts.js"></script>

		<script>
			/* fancybox */
			$('.fancybox').fancybox({
				//showCloseButton : false,
				overlayColor: '#68787b',
				overlayOpacity: 0.78,
				titlePosition: 'inside',
				padding: 27
			});
		</script>
	
</body>
</html>
