<?php

define('DB_NAME', 'cl34-capstone');
define('DB_USER', 'cl34-capstone');
define('DB_PASSWORD', '4M6DT.ng2');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}
echo 'Connected successfully  ';

$value1 = $_POST['fname'];
$value2 = $_POST['lname'];
$value3 = $_POST['city'];
$value4 = $_POST['state'];
$value5 = $_POST['zip'];
$value6 = $_POST['cell'];
$value7 = $_POST['email'];
$value8 = $_POST['comments'];

$sql = "INSERT INTO user_contact(fname, lname, city, state, zip, cell, email, comments) VALUES ('$value1', '$value2','$value3','$value4','$value5','$value6', '$value7','$value8')";


if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}else{
	echo ' information submitted';
}

mysql_close();
?>
