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



$value1= $_POST['fname'];
$value2 = $_POST['mname'];
$value3= $_POST['lname'];
$value4= $_POST['addL1'];
$value5= $_POST['addL2'];
$value6= $_POST['city'];
$value7= $_POST['state'];
$value8= $_POST['zip'];
$value9= $_POST['security'];
$value10= $_POST['dob'];
$value11= $_POST['driLicenseNo'];
$value12= $_POST['driLicenseSt'];
$value13= $_POST['driLicenseEx'];
$value14= $_POST['phone'];
$value15= $_POST['email'];
$value16= $_POST['years'];
$value17= $_POST['months'];
$value18= $_POST['resiType'];
$value19= $_POST['mortgage'];



$sql = "INSERT INTO Applicant_info (fname, mname, lname, addL1, addL2, city, state, zip, security, dob, driLicenseNo,  driLicenseSt, driLicenseEx,  phone, email, years, months, resiType, mortgage) VALUES ('$value1','$value2','$value3','$value4','$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12', '$value13','$value14','$value15','$value16','$value17','$value18','$value19')";


if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}else{
	echo 'information submitted';
}

mysql_close();
?>