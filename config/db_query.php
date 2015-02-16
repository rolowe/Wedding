<?
	//$couple = $_GET["couple"];

	//Select everything from Info Table
	$wedding_info = mysql_query("SELECT * FROM wedding_info");
	//$wedding_info = mysql_query("SELECT * FROM wedding_info WHERE title = '$couple'");

	//Select everything from Rooms Table
	$ground_rooms = mysql_query("SELECT * FROM rooms WHERE floor = 'G'");
	$first_rooms = mysql_query("SELECT * FROM rooms WHERE floor = '1'");
	$second_rooms = mysql_query("SELECT * FROM rooms WHERE floor = '2'");
	$courtyard_rooms = mysql_query("SELECT * FROM rooms WHERE floor = 'C'");
	
?>