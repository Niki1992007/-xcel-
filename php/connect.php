<?php
$hostDB = "localhost";
$adminDB = "root";
$passwordDB = ""; /* Без пароля */
$database_name = "daltasertDB";
$tableDB_name = "input_data";

$link = mysqli_connect($hostDB, $adminDB, $passwordDB, $database_name) or DIE ("Не могу создать соединение");
?>