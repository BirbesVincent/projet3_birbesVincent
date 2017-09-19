
<table class="table table-bordered">
    <thead>
    <tr>
        <th class="col-lg-1 hidden-sm hidden-xs">ID</th>
        <th class="col-lg-1 hidden-sm hidden-xs">Titre</th>
        <th class="col-lg-9 col-xs-10">Contenu</th>
        <th class="col-lg-1 hidden-sm hidden-xs">date</th>
        <th class="col-lg-1 col-xs-2">Editer</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td class="hidden-sm hidden-xs"><?= $post->id; ?></td>
            <td class="hidden-sm hidden-xs"><?= $post->title; ?></td>
            <td><?= $post->content; ?></td>
            <td class="hidden-sm hidden-xs"><?= $post->date; ; ?></td>
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