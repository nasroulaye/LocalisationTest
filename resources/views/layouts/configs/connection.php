<?php

$connect = [
	# Database Host Name
	'HOSTNAME' => 'localhost',

	# Database Username
	'USERNAME' => 'root',
	//UserName: uvrgbdcgjf
	//Password : m3uUxzszSj
	//DBName : uvrgbdcgjf
	//Password : m3uUxzszSj
	# Database Password
	'PASSWORD' => '',

	# Database Name
	'DATABASE' => 'donex1709834_1f3zik'
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
