<?php
$pdo = new Database('db', 'blog', 'root', 'root');
$managerArticle = new ArticleDAO($pdo->getPdo());
$allArticles = $managerArticle->getAllArticle();

require __DIR__ . '/../views/index.view.php';
