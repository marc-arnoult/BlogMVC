<?php

$pdo = new Model\Database('db', 'blog', 'root', 'root');

$managerArticle = new Model\ArticleDAO($pdo->getPdo());
$allArticles = $managerArticle->getAllArticle();

require __DIR__ . '/../views/index.view.php';
