<?php

$app = App::getInstance();
$articles = $app->getTable('Article')->findById($_GET['id']);

if ($articles === false){
    $app->notfound();
}

foreach ($articles as $post): ?>
    <h2><?= $post->title; ?></h2>
    <p><?= $post->content; ?></p>
<?php endforeach;?>

<?php $commentsByArticles = $app->getTable('Comment')->findAllCommentsByArticle($_GET['id']);?>


<table class="table table-bordered">
    <thead>
    <th>Auteur</th>
    <th>Contenu</th>
    </thead>
    <tbody>

    <?php foreach ($commentsByArticles as $comment):?>
        <tr>
            <td><?= $comment->author; ?></td>
            <td><?= $comment->content; ?></td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>
