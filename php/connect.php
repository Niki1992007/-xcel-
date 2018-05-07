<?php
$hostDB = "localhost";
$adminDB = "root";
$passwordDB = ""; /* Без пароля */
$tableDB_name = "input_data";
$database_name = "daltasertDB";
$connection = mysql_connect($hostDB, $adminDB, $passwordDB);

mysql_select_db($database_name);

mysql_query(" SET NAMES 'utf8' ");

if (!$connection || !$database_name) 
{
	exit(mysql_error());
}
?>