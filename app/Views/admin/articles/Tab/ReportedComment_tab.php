
    <table class="table table-bordered">
        <thead>
        <tr>
            <th class="col-xs-1">ID</th>
            <th class="col-xs-1">Auteur</th>
            <th class="col-xs-7">Contenu</th>
            <th class="col-xs-2">date</th>
            <th class="col-xs-1">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($reportedComments as $comment): ?>
            <tr>
                <td><?= $comment->id; ?></td>
                <td><?= $comment->author; ?></td>
                <td><?= $comment->content; ?></td>
                <td><?= $comment->date_comment; ; ?></td>
                <td>
                    <form style="padding-top: 1%;" action="?p=admin.posts.deleteComment" method="post">
                        <input type="hidden"  name="id" value="<?= $comment->id; ?>">
                        <button type="submit" class="btn btn-xs btn-danger" >Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php
if (empty($comments)){
    ?>
    <div class="col-lg-12 text-center">
        <p>Il n'y aucun commentaire(s) signalé(s) !</p>
    </div>
    <?php
}