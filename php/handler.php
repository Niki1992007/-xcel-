<?php
mb_internal_encoding("UTF-8");

include_once("connect.php");

if (isset($_POST['submit'])) {
	$client_surname = strip_tags(trim ($_POST['element_1']));
	$client_name = strip_tags(trim ($_POST['element_2']));
	$client_second_name = strip_tags(trim ($_POST['element_3']));
	$client_sex = strip_tags(trim ($_POST['element_6']));
	$client_day_birthday = strip_tags(trim ($_POST['element_4_2']));
	$client_month_birthday = strip_tags(trim ($_POST['element_4_1']));
	$client_year_birthday = strip_tags(trim ($_POST['element_4_3']));
	$client_weight = strip_tags(trim ($_POST['element_12']));
	$client_height = strip_tags(trim ($_POST['element_14']));

	$result = mysql_query (" 

		INSERT INTO input_data(surname, name, second_name, sex, day_birthday, month_birthday, year_birthday, weight, height) 
		VALUES ('$client_surname', '$client_name', '$client_second_name', '$client_sex','$client_day_birthday',
		'$client_month_birthday', '$client_year_birthday', '$client_weight', '$client_height')

	");

	echo 'Данные поступили';

	mysql_close();
} 

else {
	echo 'Что-то опять пошло не так!';
}
?>