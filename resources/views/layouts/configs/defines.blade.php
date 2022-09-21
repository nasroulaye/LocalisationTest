<?php

use Illuminate\Support\Facades\Route;

$route = Route::current();

$name = $route->getName();

define("page", $name);

