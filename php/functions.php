<?php
include_once("connect.php");

$sql =  mysql_query ("SELECT surname, name, second_name, sex, day_birthday, month_birthday, year_birthday, weight, height FROM input_data WHERE recording_time = CURRENT_TIMESTAMP || surname = '$client_surname' || name = '$client_name' || second_name = '$client_second_name'");
$otvet = mysql_fetch_array($sql);

print_r($otvet);
?>