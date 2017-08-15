

<div class="content">
    <?php foreach ( App::getInstance()->getTable('Article')->getNumberOfComments() as $post): ?>
    <div class="travelling">
        <div class="col-md-10 travelling1">
            <h1><a href="<?= $post->url ?>"><?= $post->title; ?></a></h1>
            <h5>par <a href="#">auteur, </a> datetime</h5>
            <p><?= $post->content; ?></p>

            <div class="loadmore">
                <a class="more" href="<?= $post->url ?>">Voir plus</a>
            </div>

        </div>
        <div class="col-md-1 travelling2">
            <h3><?= $post->nb_com; ?></h3>
            <a href="#">comments</a>
        </div>
        <div class="clearfix"> </div>

<?php endforeach; ?>

    </div>
</div>
