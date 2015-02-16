<?php
	include "../../config/config.php";
	error_reporting(-1);

	$couple_id = $_POST["couple_id"];
	$top_table = $_POST["top_table"];
	$table1 = $_POST["table1"];
	$table2 = $_POST["table2"];
	$table3 = $_POST["table3"];
	$table4 = $_POST["table4"];
	$table5 = $_POST["table5"];
	$table6 = $_POST["table6"];
	$table7 = $_POST["table7"];
	$table8 = $_POST["table8"];
	$table9 = $_POST["table9"];
	$table10 = $_POST["table10"];
	$table11 = $_POST["table11"];
	$table12 = $_POST["table12"];
	$table13 = $_POST["table13"];
	$table14 = $_POST["table14"];
	$table15 = $_POST["table15"];


	$exisiting_entry = mysql_query("SELECT * FROM table_plan WHERE couple_id='$couple_id'");

	if (mysql_num_rows($exisiting_entry) > 0) {
		echo "Exists";
		mysql_query("UPDATE table_plan SET top_table='$top_table', table1='$table1', table2='$table2', table3='$table3', table4='$table4', table5='$table5', table6='$table6', table7='$table7', table8='$table8', table9='$table9', table10='$table11', table12='$table12', table13='$table13', table14='$table14', table15='$table15' WHERE couple_id='$couple_id'");
		statusCheck();
	}
	else {
		echo "New Entry";
		mysql_query("INSERT INTO table_plan (couple_id, top_table, table1, table2, table3, table4, table5, table6, table7, table8, table9, table10, table11, table12, table13, table14, table15) VALUES ('$couple_id', '$top_table', '$table1', '$table2', '$table3', '$table4', '$table5', '$table6', '$table7', '$table8', '$table9', '$table10', '$table11', '$table12', '$table13', '$table14', '$table15')");
		statusCheck();
	}
	

	
	function statusCheck() {
		$rows_affected = mysql_affected_rows();
		if ($rows_affected == "1") {
			header("Location: ../table-plan.php?update=success");
		} else {
			header("Location: ../table-plan.php?update=failure");
		}
	}

	

?>