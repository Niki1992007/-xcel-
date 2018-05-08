<?php

include_once("connect.php");

function get_data() {
	$sql = "SELECT user_id, surname, name, second_name, sex, day_birthday, month_birthday, year_birthday, weight, height FROM input_data";

	$result_data = mysql_query($sql);

	$row = array();

	for ($i=0; $i < mysql_num_rows($result_data); $i++) { 
		$row[] = mysql_fetch_assoc($result_data);
	}
	return $row;
}

?>