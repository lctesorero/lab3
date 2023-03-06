<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>
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