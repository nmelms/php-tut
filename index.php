<?php

require './functions.php';

$path = $_SERVER['REQUEST_URI'];

echo $path;
// Basic router
if ($path === '/' || $path === '') {
    require 'controllers/index.php';
} elseif ($path === '/about') {
    require 'controllers/about.php';
}else if($path === '/contact'){
  require 'controllers/contact.php';
} else {
    require 'controllers/404.php';
}