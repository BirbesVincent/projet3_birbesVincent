<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <audio controls="controls" style="width: 100%">
                <source src="musique/Crimson Tide" type="audio/mp3" />
                Votre navigateur n'est pas compatible
            </audio>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center" style="margin: 1% 0 1% 0;"><?= $post->title; ?></h1>
            <p style="margin: 1%; padding: 0;"><?= $post->content; ?></p>
        </div>
    </div>
    <div class="row">
        <img src="images/ligne.png" style=" width: 100%; margin: 1% 0% 2% 0%;">
            <h1 class="text-center">Commentaires</h1>
        <img src="images/ligne.png" style=" width: 100%; margin: 1% 0% 2% 0%;">
    </div>
    <div class="row">
        <div class="form text-center">
            <form class="form-inline" style="padding-top: 1%;padding-bottom: 1%; " method="post">
                <?= $form->input('author', 'Votre Pseudo'); ?>
                <?= $form->input('content', 'Votre message'); ?>
                <button class="btn btn-primary">Envoyer</button>
            </form>
        </div>
        <img src="images/ligne.png" style=" width: 100%; margin: 1% 0% 2% 0%;">
    </div>

    <?php if (!empty($comments)){ ?>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Auteur</td>
                    <td>Contenu</td>
                    <td>date</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($comments as $comment): ?>
                    <tr>
                        <td><?= $comment->author; ?></td>
                        <td><?= $comment->content; ?></td>
                        <td><?= $comment->date_comment; ?></td>
                        <td>
                            <form style="padding-top: 2%; width: 100%;" action="?p=posts.Report" method="post">
                                <input type="hidden"  name="id" value="<?= $comment->id; ?>">
                                <button type="submit" style="width: 100%;" class="btn btn-danger" href="?p=posts.Report&id=<?= $comment->id;?>">Reporter</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
        </table>
    <?php }
        else { ?>
            <div>
                <p>Il n'y a aucun commentaires sur ce chapitre pour le moment</p>
            </div>
        <?php }
    ?>
    </div>
</div>

