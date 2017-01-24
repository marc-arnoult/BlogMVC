<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimal-ui">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?= !empty($title) ? $title : 'My blog'; ?></title>
        <script src="https://use.fontawesome.com/84658dd2ae.js"></script>
        <link rel="stylesheet" href="/public/css/app.css">
    </head>
    <body>
        <header>
            <div class="bg-header"></div>
            <nav>
                <ul>
                    <div>
                        <li><a href="/">Home</a></li>
                        <li><a href="/articles">Articles</a></li>
                    </div>

                    <img src="/public/img/logo.png" alt="logo">

                    <div>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </div>
                </ul>
            </nav>
        </header>

