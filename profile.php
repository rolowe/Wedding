<?php include "config/config.php"; ?>

<!DOCTYPE html>
<head>
	<title>Save the date | <?php echo $bride; ?> and <?php echo $groom; ?> are getting married</title>
</head>
<body>
	

<?php
	$getName = explode("/",$_SERVER['REQUEST_URI']);
	$username = $getName[2];

	$result = mysql_query("SELECT * FROM wedding_info WHERE username='$username'");  

	$num_rows = mysql_num_rows($result);

	if($num_rows == 0){
	  //header ("Location: 404");
		echo "No Wedding found";
	} else {
		print_r($num_rows);
		echo "wedding found";
	}

?>
	
</body>
</html>
