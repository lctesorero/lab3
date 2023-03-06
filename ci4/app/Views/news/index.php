<h2><?= esc($title) ?></h2>
<style>
    body {
        background-color: #161616;
        color: whitesmoke;
        }

    h2{
        font-family:'Times New Roman', Times, serif;
        color: #c89595;
        font-size: 40px;
        text-align: center;
    }
    h3 {
        color: #ffb3c6;
        font-family:'Times New Roman', Times, serif;
        text-align: left;
        font-size: 25px;
    }

    a {
        color: #c89595;
        font-family:'Times New Roman', Times, serif;
        text-align: center;
        font-size: 20px;
    }

</style>

<?php if (! empty($news) && is_array($news)): ?>


    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/lab3/ci4/public/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
	</br>



    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
