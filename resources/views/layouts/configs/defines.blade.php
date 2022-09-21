<?php

use Illuminate\Support\Facades\Route;

$route = Route::current();
dd($route);

$name = $route->getName();

define("page", $name);

