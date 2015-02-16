<?php include "config/config.php"; ?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=Edge" ><![endif]-->
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	
	<title>Save the date | <?php echo $bride; ?> and <?php echo $groom; ?> are getting married</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/master.css">

	<!-- custom font -->
	<link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
	
	<!-- Paste Fontdeck custom font here --> 
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" href="css/ie7.css">
	<![endif]-->
	
	<script src="js/jquery.js"></script>
	<script src="js/jquery.customslider.js"></script>
	<script src="js/jquery.scrollTo-min.js"></script>
	<script src="js/jquery.krioImageLoader.js"></script>
	
	<!-- fancybox -->
	<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="fancybox/jquery.easing-1.3.pack.js"></script>
	<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
	
	<script src="js/main.js"></script>
	
</head>
<body id="index" class="home">
	
	<!-- #main -->
	<div id="main">
	
		<!-- #Container -->
		<div id="container">
		
			<h1><?php echo $bride; ?> and <?php echo $groom; ?> are getting married</h1>

			<?php include "controls/navigation.php"; ?>

			<!-- About us -->
			<div id="about_us">
			
				<!-- she -->
				<div class="woman">
					<span class="name">
						<span class="before"></span>
						<?php echo $bride; ?>
						<span class="after"></span>
					</span>
				</div>
				<!-- END she -->
			
				<div class="separator">
					and
				</div>
			
				<!-- he -->
				<div class="man">
					<span class="name">
						<span class="before"></span>
						<?php echo $groom; ?>
						<span class="after"></span>
					</span>
				</div>
				<!-- END he -->
			
			</div>
			<!-- END About us -->

			<!-- Wedding party -->
			<div id="wedding_party">
				<div class="before"></div>
				<h2>Save the date</h2>
			
				<div class="ornament_top"></div>
			
				<time class="date" datetime="">
					<?php echo $date; ?>
				</time>
			
				<div class="time">
					<?php echo $description; ?>
				</div>
				<div class="location">
					Orchardleigh House, Somerset, BA11 2PB
					<a class="fancybox iframe" title="Orchardleigh House, Somerset, BA11 2PB" href="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Orchardleigh+House&amp;aq=&amp;g=Orchardleigh+Estate,+Frome,+Somerset+BA11+2PH&amp;ie=UTF8&amp;hq=Orchardleigh+House&amp;hnear=&amp;radius=15000&amp;ll=51.261861,-2.324209&amp;spn=0.007411,0.01929&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=14140728040136310278&amp;output=embed">get directions</a>
					<p>For further information on the venue please visit <a href="http://www.orchardleigh.net" target="_blank">http://www.orchardleigh.net</a></p>
				</div>
			
				<div class="ornament_bottom"></div>
			
				<div class="after"></div>
			</div>
			<!-- END Wedding party -->

			<!-- Photos -->
			<div id="photos">
				<div class="before"></div>
			
				<div id="slider">
					<ul>
						<li><a class="fancybox" title="The rich history of Orchardleigh dates back to the Domesday Book and is one of the most unspoilt English Country Estates." href="images/image2_lrg.jpg"><img alt="Orchardleigh" src="images/image2.jpg"></a></li>
						
						<li><a class="fancybox" title="Orchardleigh is a romantic Somerset Estate 10 miles south of Bath, with a magnificent Victorian Stately Home, an Island Church, 18-hole Golf Course and plenty of accommodation." href="images/image1_lrg.jpg"><img alt="Orchardleigh" src="images/image1.jpg"></a></li>
						
						<li><a class="fancybox" title="You will find complete exclusivity at Orchardleigh. Our aim is to allow guests to experience the enjoyment of the House and Lodges on the Estate as if they were their own." href="images/image3_lrg.jpg"><img alt="Orchardleigh" src="images/image3.jpg"></a></li>
						
						<li><a class="fancybox" title="St. Mary’s, Orchardleigh enjoys the unique setting of being at the edge of a lake with a moat around the Church. Hence it is often referred to as ‘The Island Church.’ Its remoteness means there is no electricity supply to the church which means all our services are candlelit and the organ has to be pumped by hand!" href="images/image4_lrg.jpg"><img alt="Orchardleigh" src="images/image4.jpg"></a></li>
						
						<li><a class="fancybox" title="The Orchardleigh C of E Island Church is available for Religious Ceremonies and has an advised capacity for 100 guests." href="images/image7_lrg.jpg"><img alt="Orchardleigh" src="images/image7.jpg"></a></li>
						
						<li><a class="fancybox" title="Banqueting facilities are available for 80 - 165 guests." href="images/image5_lrg.jpg"><img alt="Orchardleigh" src="images/image5.jpg"></a></li>
						
						<li><a class="fancybox" title="Catering is provided by our own in-house executive Chef. The executive chef and team will carefully design a menu to suit your individual tastes and requirements." href="images/image6_lrg.jpg"><img alt="Orchardleigh" src="images/image6.jpg"></a></li>
						
						<li><a class="fancybox" title="Accommodation is available for up to 165 guests on the Estate with magnificent rooms in the main House together with superb Estate Lodges and Cottages." href="images/image8_lrg.jpg"><img alt="Orchardleigh" src="images/image8.jpg"></a></li>
						
					</ul>
				</div>
			
				<div class="after"></div>
			</div>
			<!-- END Photos -->

			<!-- Contact -->
			<div id="contact">
				<div class="before"></div>
				
				<h3>Questions? Contact us</h3>
				
				<form action="functions/send.php" method="post" accept-charset="utf-8">
					
					<div class="col">
						<label>
							<span>Name</span>
							<input type="text" name="name" value=" ">
						</label>
						<label class="subject">
							<span>Subject</span>
							<input type="text" name="subject" value=" ">
						</label>
					</div>
				
					<div class="col">
						<label class="mail">
							<span>Your e-mail</span>
							<input type="text" name="mail" value="">
						</label>
						<label class="message">
							<span>Message</span>
							<textarea rows="4" name="message"></textarea>
						</label>
					</div>
				
					<input type="submit" name="submit" value="Send message" id="submit">
				
				</form>
			
				<div class="after"></div>
			</div>
			<!-- END Contact -->

			<!-- Fotter -->
			<footer>
				<div class="before"></div>
				<div class="after"></div>
			</footer>
			<!-- END Footer -->
		
		</div>
		<!-- END #Container -->
	
	</div>
	<!-- END #main -->
	
	
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5486601-17']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

	
</body>
</html>
