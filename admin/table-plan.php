<?php 
	session_start(); 
	if ($_SESSION['loggedIn'] != "true") {
		header("Location: index.php?auth=notloggedin");
	}
	include "../config/config.php"; 
	include "functions/admin_functions.php";
	$table_plan = mysql_query("SELECT * FROM table_plan");
	$wedding_info = mysql_query("SELECT * FROM wedding_info");
?>


<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<!--[if ie]><meta http-equiv="X-UA-Compatible" content="IE=Edge" ><![endif]-->
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	
	<title>Table Plan | Save the date</title>

	<link rel="stylesheet" href="../css/rooms.css">
	<link rel="stylesheet" href="../css/admin.css">
	<script src="../js/jquery-1.7.2.min.js"></script>
</head>

	<body class="admin">

		<div class="container">

			<?php include "../controls/header.php"; ?>

			<h2>Table Plan</h2>

			<p>This layout shows seating for 128/148 guests, with 8 or 9 guests per round table, 8 will give a little more room per person, and 8 or 12 guests for the Top Table. 12 will require seating all around the table.</p>

			<?php
				$couple_id = ""; $top_table = ""; $table1 = ""; $table2 = ""; $table3 = ""; $table4 = ""; $table5 = ""; $table6 = ""; $table7 = ""; $table8 = ""; $table9 = ""; $table10 = ""; $table11 = ""; $table12 = ""; $table13 = ""; $table14 = ""; $table15 = "";

				while($row = mysql_fetch_array($wedding_info)) {
					$couple_id = $row['id'];


					// Get all wedding info
					while($table_row = mysql_fetch_array($table_plan)) {
							$top_table = $table_row['top_table'];
							$table1 = $table_row['table1'];
							$table2 = $table_row['table2'];
							$table3 = $table_row['table3'];
							$table4 = $table_row['table4'];
							$table5 = $table_row['table5'];
							$table6 = $table_row['table6'];
							$table7 = $table_row['table7'];
							$table8 = $table_row['table8'];
							$table9 = $table_row['table9'];
							$table10 = $table_row['table10'];
							$table11 = $table_row['table11'];
							$table12 = $table_row['table12'];
							$table13 = $table_row['table13'];
							$table14 = $table_row['table14'];
							$table15 = $table_row['table15'];
						}
				
			?>

				<img src="../images/table-plan.jpg" alt="" border="0" class="table-plan-img" />

				<form action="functions/update-table-plan.php" method="POST" class="table-plan">
					<input type="hidden" name="couple_id" value="<?php echo $couple_id; ?>" />
					<div class="table">
						<label>Top Table:</label>
						<textarea rows="8" name="top_table"><?php echo $top_table; ?></textarea>
					</div>
					<div class="table">
						<label>Table 1:</label>
						<textarea rows="8" name="table1"><?php echo $table1; ?></textarea>
					</div>
					<div class="table">
						<label>Table 2:</label>
						<textarea rows="8" name="table2"><?php echo $table2; ?></textarea>
					</div>
					<div class="table">
						<label>Table 3:</label>
						<textarea rows="8" name="table3"><?php echo $table3; ?></textarea>
					</div>
					<div class="table">
						<label>Table 4:</label>
						<textarea rows="8" name="table4"><?php echo $table4; ?></textarea>
					</div>
					<div class="table">
						<label>Table 5:</label>
						<textarea rows="8" name="table5"><?php echo $table5; ?></textarea>
					</div>
					<div class="table">
						<label>Table 6:</label>
						<textarea rows="8" name="table6"><?php echo $table6; ?></textarea>
					</div>
					<div class="table">
						<label>Table 7:</label>
						<textarea rows="8" name="table7"><?php echo $table7; ?></textarea>
					</div>
					<div class="table">
						<label>Table 8:</label>
						<textarea rows="8" name="table8"><?php echo $table8; ?></textarea>
					</div>
					<div class="table">
						<label>Table 9:</label>
						<textarea rows="8" name="table9"><?php echo $table9; ?></textarea>
					</div>
					<div class="table">
						<label>Table 10:</label>
						<textarea rows="8" name="table10"><?php echo $table10; ?></textarea>
					</div>
					<div class="table">
						<label>Table 11:</label>
						<textarea rows="8" name="table11"><?php echo $table11; ?></textarea>
					</div>
					<div class="table">
						<label>Table 12:</label>
						<textarea rows="8" name="table12"><?php echo $table12; ?></textarea>
					</div>
					<div class="table">
						<label>Table 13:</label>
						<textarea rows="8" name="table13"><?php echo $table13; ?></textarea>
					</div>
					<div class="table">
						<label>Table 14:</label>
						<textarea rows="8" name="table14"><?php echo $table14; ?></textarea>
					</div>
					<div class="table">
						<label>Table 15:</label>
						<textarea rows="8" name="table15"><?php echo $table15; ?></textarea>
					</div>

					<input type="submit" class="button" value="Update" /></p>
				</form>

			<?php } ?>

			<?php include "functions/admin-menu.php"; ?>

			<?php include "../controls/footer.php"; ?>


		</div>

	</body>
</html>

