<?php
$pdo = new Database('db', 'blog', 'root', 'root');
$manageArticle = new ArticleDAO($pdo->getPdo());
$allArticles = $manageArticle->getAllArticle();

require __DIR__ . '/../views/index.view.php';

