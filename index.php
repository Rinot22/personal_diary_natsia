<?php

require_once 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

// get
Routing::get('', 'DefaultController');

// post
Routing::post('login', 'SecurityController');
Routing::post('registration', 'SecurityController');

Routing::run($path);