<?php require __DIR__ . '/partials/header.view.php'; ?>

<section>
    <h1>Hello Welcome to my Blog</h1>
    <div class="bg-tiret">
        <span class="tiret"></span>
        <span class="tiret"></span>
    </div>
    <?php foreach ($allArticles as $article): ?>
        <article>
            <div class="round">
                <date>
                    <?php
                        $date = new DateTime($article['date_creation']);
                        echo $date->format('d M');
                    ?>
                </date>
            </div>
            <div class="info"
            <span>Category : Diary</span>
            <span><i class="fa fa-heart" aria-hidden="true"></i>136 likes</span>
            <span><i class="fa fa-comment-o" aria-hidden="true"></i>21 Comments</span>
            </div>
            <hr>
            <h2><?= $article['title']; ?></h2>
            <p><?= $article['content']; ?></p>
            <a href="#">Read More</a>
            <hr>
        </article>
    <?php endforeach; ?>
</section>

<?php require __DIR__ . '/partials/footer.view.php'; ?>