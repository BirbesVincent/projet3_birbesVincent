
<table class="table table-bordered">
    <thead>
    <tr>
        <th class="col-xs-1">ID</th>
        <th class="col-xs-1">Titre</th>
        <th class="col-xs-8">Contenu</th>
        <th class="col-xs-1">date</th>
        <th class="col-xs-1">Editer</th>
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
                <a class="btn btn-info" style="width: 100%;" href="?p=admin.posts.edit&id=<?= $post->id;?>">Editer</a>
                <form style="padding-top: 2%;" action="?p=admin.posts.delete" method="post">
                    <input type="hidden"  name="id" value="<?= $post->id; ?>">
                    <button type="submit" class="btn btn-danger" href="?p=admin.posts.delete&id=<?= $post->id;?>">Supprimer</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>