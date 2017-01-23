<?php
require __DIR__ . '/vendor/autoload.php';

$url = trim($_SERVER['REQUEST_URI'], '/');
$route = require 'routes.php';

$router = new App\Router($route, $url);
$router->direct();

?>