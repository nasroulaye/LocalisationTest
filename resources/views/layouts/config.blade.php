<?php
session_start();
error_reporting(0);
function rewrite_urls($change){
  $match = [

    '/restaurants.php\?id=([0-9]+)&t=([A-Za-z0-9_-]+)/',
    '/restaurants.php/',

    '/cuisines.php\?id=([0-9]+)&t=([0-9a-zA-z]+)/',
    '/cuisines.php/',

    '/pages.php\?id=([0-9]+)&t=([0-9a-zA-z]+)/',
    '/plans.php/',
    '/cart.php/',
    '/myorders.php/',
    '/userdetails.php\?id=([0-9]+)/',
    '/userdetails.php/',

    '/restaurant.php\?pg=([a-zA-z]+)&request=([a-zA-z]+)&id=([0-9]+)/',
    '/restaurant.php\?pg=([a-zA-z]+)&request=([a-zA-z]+)/',
    '/restaurant.php\?pg=([a-zA-z]+)/',
    '/restaurant.php/',

  ];
  $replace = [

    'restaurants/$1/$2',
    'restaurants',

    'cuisines/$1/$2',
    'cuisines',

    'pages/$1/$2',
    'plans',
    'cart',
    'myorders',
    'userdetails/$1',
    'userdetails',

    'restaurant/$1/$2/$3',
    'restaurant/$1/$2',
    'restaurant/$1',
    'restaurant',

  ];

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
@include('layouts.configs.defines')
@include('layouts.configs.functions')
@include('layouts.configs.pagination')
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

// require 'vendor/autoload.blade.php';

define("get_country_name", (in_array(page, ["response", "stripe"]) ? (isset($ipall['country_name']) ? $ipall['country_name'] : "") : "") );
define("get_country_code", (in_array(page, ["response", "stripe"]) ?  (isset($ipall['country']) ? $ipall['country'] : "") : "") );
define("get_state",        (in_array(page, ["response", "stripe"]) ?  (isset($ipall['region']) ? $ipall['region'] : "") : "") );
define("get_city_name",    (in_array(page, ["response", "stripe"]) ?  (isset($ipall['city']) ? $ipall['city'] : "") : "") );