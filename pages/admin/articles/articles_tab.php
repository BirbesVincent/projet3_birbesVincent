<?php
$posts = App::getInstance()->getTable('Article')->all();
?>

<table class="table table-bordered">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Contenu</td>
        <td>date</td>
        <td>Editer</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $post->id; ?></td>
            <td><?= $post->title; ?></td>
            <td><?= $post->content; ?></td>
            <td><?= $post->date; ; ?></td>
            <td>
                <a class="btn btn-primary" href="?posts.edit&id=<?= $post->id;?>">Editer</a>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>

