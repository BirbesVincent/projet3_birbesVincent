

<?php
$post = App::getInstance()->getTable('Article')->findById($_GET['id']);
$comments = App::getInstance()->getTable('Comment')->findAllCommentsByArticle($_GET['id']);
?>

<div class="container">
    <div class="col-lg-12" style="border: solid black 1px;">
        <h1 class="text-center" style="margin: 1% 0% 1% 0%;"><?= $post->title; ?></h1>
        <p style="margin: 1%; padding: 2%;"><?= $post->content; ?></p>
    </div>

        <img src="images/ligne.png" style=" width: 100%; margin: 2% 0% 1% 0%;">
            <h1 class="text-center">Commentaires</h1>
        <img src="images/ligne.png" style=" width: 100%; margin: 1% 0% 2% 0%;">

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
                    <td><?= $comment->date; ?></td>
                    <td>
                        <form method="post">
                            <button class="btn btn-danger">Signaler</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
    </div>


</div>