<?php
$posts = App::getInstance()->getTable('Article')->all();
?>

<table class="table table-bordered">
    <thead>
    <tr>
        <th class="col-xs-0.5">ID</th>
        <th class="col-xs-1.5">Titre</th>
        <th class="col-xs-9">Contenu</th>
        <th class="col-xs-1">date</th>
        <th class="col-xs-1">Editer</th>
        <th class="col-xs-1">Supprimer</th>
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
                <a class="btn btn-info"  href="?p=posts.edit&id=<?= $post->id;?>">Editer</a>
            </td>
            <td>
                <form action="?p=post.delete" method="post">
                    <input type="hidden"  name="id" value="<?= $post->id; ?>">
                    <button type="submit" class="btn btn-danger" href="?p=posts.delete&id=<?= $post->id;?>">Supprimer</button>
                </form>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>

