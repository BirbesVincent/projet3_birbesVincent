<?php
$comments = App::getInstance()->getTable('Comment')->all();
?>

<table class="table table-bordered">
    <thead>
    <tr>
        <td>ID</td>
        <td>Auteur</td>
        <td>Contenu</td>
        <td>date</td>
        <td>Editer</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($comments as $comment): ?>
        <tr>
            <td><?= $comment->id; ?></td>
            <td><?= $comment->author; ?></td>
            <td><?= $comment->content; ?></td>
            <td><?= $comment->date; ; ?></td>
            <td>
                <a class="btn btn-primary" href="?posts.edit&id=<?= $comment->id;?>">Editer</a>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>

