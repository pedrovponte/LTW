<?php
    function draw_news_headers($articles) {
        foreach($articles as $article) { ?>
            <article>
                <h1><a href = "#"><?= $article['title'] ?></a></h1>
                <p><?= $article['introduction'] ?></p>
            </article>
        <?php }
    }
?>