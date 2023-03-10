<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>
        
    <?php foreach ($guest as $guest_item): ?>

        <div class="mainforms">
        <h3><?= esc($guest_item['name']) ?></h3>
        <p><?= esc($guest_item['email']) ?></p>
        <p><?= esc($guest_item['website']) ?></p>
        <p><?= esc($guest_item['comments']) ?></p>
        <p><?= esc($guest_item['gender']) ?></p>
        </div>
        <p><a href="/lab3/ci4/public/guest/<?= esc($news_item['slug'], 'url') ?>">View Guest</a></p>
        </br>

    <?php endforeach?>

<?php else: ?>
    <h3>No guests</h3>
    <p>Unable to find any guests for you.</p>
<?php endif?>