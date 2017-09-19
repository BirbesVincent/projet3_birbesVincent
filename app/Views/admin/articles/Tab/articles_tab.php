
<table class="table table-bordered">
    <thead>
    <tr>
        <th class="col-lg-10 col-xs-12">Contenu</th>
        <th class="col-lg-3 col-xs-12">Editer</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td>
                <h3 class="text-center"><?= $post->title; ?></h3>
                <h5 class="text-center">Publié le <?= $post->date; ; ?></h5>
                <p><?= $post->content; ?></p>
            </td>
            <td>
                <a class="btn btn-info" style="width: 100%;" href="?p=admin.posts.edit&id=<?= $post->id;?>">Editer</a>
                <form style="padding-top: 2%;" action="?p=admin.posts.delete" method="post">
                    <input type="hidden"  name="id" value="<?= $post->id; ?>">
                    <button type="submit" style="width: 100%" class="btn btn-danger" href="?p=admin.posts.delete&id=<?= $post->id;?>">Supprimer</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>