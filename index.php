<?php

require_once 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

// DefaultController
Routing::get('', 'DefaultController');

// RecordController
Routing::get('records', 'RecordController');
Routing::post('calendar', 'RecordController');

// ArticlesController
Routing::get('articles', 'ArticleController');

// SecurityController
Routing::post('login', 'SecurityController');
Routing::post('registration', 'SecurityController');
Routing::get('logout', 'SecurityController');

Routing::run($path);