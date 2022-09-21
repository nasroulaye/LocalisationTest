<?php
session_start();
error_reporting(0);
function rewrite_urls($change){
  $change = preg_replace($match, $replace, $change);

	return $change;
}
ob_start("rewrite_urls");


# Language


function getBaseUrl(){
  $protocol = 'http';
  if ($_SERVER['SERVER_PORT'] == 443 || (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on')) {
    $protocol .= 's';
  }
  $host = $_SERVER['HTTP_HOST'];
  $request = $_SERVER['PHP_SELF'];
  return dirname($protocol . '://' . $host . $request);
}

# Your website path
define("path", getBaseUrl());

//defines.php


//countries.php


//phone.php


//functions.php


//pagination.php


//class.upload.php

?>

<?php

// include __DIR__."/configs/connection.blade.php";
// include __DIR__."/configs/defines.blade.php";
// include __DIR__."/configs/countries.blade.php";
// include __DIR__."/configs/phone.blade.php";
// include __DIR__."/configs/functions.blade.php";
// include __DIR__."/configs/pagination.blade.php";
// include __DIR__."/configs/class.upload.blade.php";


# Site Details
//db_global();

# User Details
//db_login_details();

if(in_array(page, ['configs', 'login'])){
  header("HTTP/1.0 404 Not Found");
}

# User Client Info
?>
<?php

# GET Defined vars
$request = (isset($_GET['request']) ? sc_sec($_GET['request']) : '');
$pg      = (isset($_GET['pg']) ? sc_sec($_GET['pg'])           : '');
$token   = (isset($_GET['token']) ? sc_sec($_GET['token'])     : '');
$t       = (isset($_GET['t']) ? sc_sec($_GET['t'])             : '');
$id      = (isset($_GET['id']) ? (int)($_GET['id'])            : '');
$s       = (isset($_GET['s']) ? (int)($_GET['s'])              : '');
$mi      = (isset($_GET['mi']) ? (int)($_GET['mi'])            : '');
$ri      = (isset($_GET['ri']) ? (int)($_GET['ri'])            : '');

# Pagination
$page = (int) (!isset($_GET["page"]) || !$_GET["page"] ? 1 : sc_sec($_GET["page"]));
$limit = 12;
$startpoint = ($page * $limit) - $limit;


# Delete order cookie
if($pg == "ordersuccess"){
	setcookie("addtocart", "", 1);
	unset($_COOKIE['addtocart']);
}