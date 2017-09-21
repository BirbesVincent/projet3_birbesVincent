
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
                    <div class="col-lg-4 left">
                        <form style="display: inline;padding-top: 1%;height: 50%; font-size: 60%" action="?p=admin.posts.deleteComment" method="post">
                            <input type="hidden"  name="id" value="<?= $comment->id; ?>">
                            <button type="submit" class="btn btn-xs btn-danger" style="witdh:100%" onclick="return confirm('Cette action est définitive \n Voulez-vous continuer ?')"><span class="glyphicon glyphicon-remove" style="color: white"></span></button>
                        </form></div>
                    <div class="col-lg-4">
                        <form style="display: inline;padding-top: 1%;height: 50%; font-size: 60%" action="?p=admin.posts.unReport" method="post">
                            <input type="hidden"  name="id" value="<?= $comment->id; ?>">
                            <button type="submit" class="btn btn-xs btn-success" style="witdh:100%" onclick="return confirm('Cette action valide le commentaire et ôte son signalement')"><span class="glyphicon glyphicon-ok" style="color: white"></span></button>
                        </form>
                    </div>

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