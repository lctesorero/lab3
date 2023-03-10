<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    </br>
    <label for="title">Title</label>
    </br>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    </br>

    </br></br>
    <label for="body">Text</label>
    </br>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    </br>
    </br>
    <input type="submit" name="submit" value="Create news item">
</form>