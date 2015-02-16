<?php

error_reporting(E_ALL);

//Connection to MySQL
$connection = mysql_connect(DB_SERVER, DB_SERVER_USERNAME, DB_SERVER_PASSWORD);
if (!$connection)
  {
	die('Could not connect: ' . mysql_error());
  }

	//Connection to Database 
	mysql_select_db(DB_DATABASE, $connection);
	
	//mysql_close($connection);
?>
