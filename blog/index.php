<?php

require 'src/Router.php';
require 'models/Database.php';
require 'models/ArticleDAO.php';
require 'src/Article.php';

$url = trim($_SERVER['REQUEST_URI'], '/');
$route = require 'routes.php';

$router = new Router($route, $url);
$router->direct();
?>