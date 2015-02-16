<?php
	//echo phpinfo();
	//error_reporting(E_ALL ^ E_NOTICE);
	$host = $_SERVER['HTTP_HOST'];


	// Local development config
	if ($host == 'localhost:8888') {
		define('SITE_PATH','http://localhost/');
		define('AJAX_PATH',SITE_PATH);
		define('DEEP_LINK',$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);

		define('DB_SERVER', 'mysql.xxxxxxxxxxx.com'); // eg, localhost - should not be empty for productive servers
		define('DB_SERVER_USERNAME', 'USERNAME');
		define('DB_SERVER_PASSWORD', 'PASSWORD');
		define('DB_DATABASE', 'DB_NAME');
		define('USE_PCONNECT', 'false'); // use persistent connections?
		define('STORE_SESSIONS', ''); // leave empty '' for default handler or set to 'mysql'
	}

	// LIVE config settings
	else {
		define('SITE_PATH','http://www.website.com/');
		define('AJAX_PATH',SITE_PATH);
		define('DEEP_LINK',$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);

		define('DB_SERVER', 'mysql.xxxxxxxxxxx.com'); // eg, localhost - should not be empty for productive servers
		define('DB_SERVER_USERNAME', 'USERNAME');
		define('DB_SERVER_PASSWORD', 'PASSWORD');
		define('DB_DATABASE', 'DB_NAME');
		define('USE_PCONNECT', 'false'); // use persistent connections?
		define('STORE_SESSIONS', ''); // leave empty '' for default handler or set to 'mysql'
	}


	
	// define general functions used application-wide
	// include the database functions
	require('db_config.php');
	require('db_query.php');


		// Get all wedding info
		while($row = mysql_fetch_array($wedding_info)) {
			$id = $row['id'];
			$bride = $row['bride']; 
			$bride_photo = $row['bride_photo'];
			$groom = $row['groom']; 
			$groom_photo = $row['groom_photo'];
			$date = $row['date']; 
			$description = $row['description']; 
			$email = $row['email'];
			$address = $row['address'];
			$acc_number = $row['acc_number'];
			$acc_sort = $row['acc_sort'];
		}
	
?>
