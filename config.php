<?php
error_reporting(E_ALL);
$db_name = "coffee_clicker";
$db_user = "coffee_clicker";
$db_pass = "kgjH123_&@k";
//$db_user = "root";
//$db_pass = "x3*o8orent4R7_7";
$db_host = "localhost";

$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ("Can't connect!"); // establish database connection
mysqli_set_charset($mysqli, 'utf8mb4'); // set character set for when you connect to db
