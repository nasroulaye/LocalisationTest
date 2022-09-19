<?php

$connect = [
	# Database Host Name
	'HOSTNAME' => 'localhost',

	# Database Username
	'USERNAME' => 'uvrgbdcgjf',
	//UserName: uvrgbdcgjf
	//Password : m3uUxzszSj
	//DBName : uvrgbdcgjf
	# Database Password
	'PASSWORD' => 'm3uUxzszSj',

	# Database Name
	'DATABASE' => 'uvrgbdcgjf'
];

# Tables' Prefix
define('prefix', 'pl_');

# No need to change anything bellow this line
$db = new mysqli($connect['HOSTNAME'], $connect['USERNAME'], $connect['PASSWORD'], $connect['DATABASE']);
if($db->connect_errno){
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
		exit;
}


$sql_mode = $db->query("SELECT @@GLOBAL.sql_mode;");
$rs_mode = $sql_mode->fetch_assoc();
if(!empty($rs_mode["@@GLOBAL.sql_mode"])) {
	$db->query("SET GLOBAL sql_mode='';");
}
