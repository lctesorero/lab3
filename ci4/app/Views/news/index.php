<h2><?= esc($title) ?></h2>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
<<<<<<< HEAD
        <p><a href="/lab3/ci4/public/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
=======
        <p><a href="/~lctesorero/lab3/ci4/public/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
>>>>>>> dcd1088b5fb99c12fea7a9b8a7d3861042412cdc

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
