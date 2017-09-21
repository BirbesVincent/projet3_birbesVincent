<table class="table table-bordered">
    <thead>
    <tr>
        <th class="col-xs-1">Auteur</th>
        <th class="col-xs-8">Contenu</th>
        <th class="col-xs-2">date</th>
        <th class="col-xs-1" width="5%">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($comments as $comment): ?>
        <tr>
            <td><?= $comment->author; ?></td>
            <td><?= $comment->content; ?></td>
            <td><?= $comment->date_comment; ; ?></td>
            <td class="text-center">
                <form style="padding-top: 1%;" action="?p=admin.posts.deleteComment" method="post">
                    <input type="hidden"  name="id" value="<?= $comment->id; ?>">
                    <button type="submit" class="btn btn-xs btn-danger"  onclick="return confirm('Cette action est définitive \n Voulez-vous continuer ?')"><span class="glyphicon glyphicon-remove" style="color: white"></span></button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>