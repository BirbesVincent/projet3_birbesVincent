

<div class="content">

    <div class="travelling">
        <?php foreach ( $posts as $post): ?>
     <div class="wrap-post">
        <div class="col-md-10 travelling1" >
            <h1><a href="<?= $post->url ?>"><?= $post->title; ?></a></h1>
            <div>Posté le <?= $post->date; ?> </div>
            <p><?= substr($post->content, 0, 200); ?>...</p>



        </div>
        <div class="col-md-2 travelling2">
            <div class="row">
                <div class="col-lg-12 text-center" style="border-radius : 20px ;color : white; background-color: #FF6F00">
                    <H2><?= $post->nb_com; ?></H2>
                    commentaires
                </div>
            </div>
            <div class="row" style="padding-top: 4%;">
                <div class="col-lg-12 text-center" style="border-radius : 20px ;color : white; background-color: #FF6F00; padding-top: inherit ">
                    <p>
                        <a class="text-center" href="<?= $post->url ?>" style="color : white; background-color: inherit; padding-top: inherit">Lire la suite</a>
                    </p
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>

            </div>
            <img src="images/ligne.png" style=" width: 100%; margin: 2% 0% 1% 0%;">
<?php endforeach; ?>

    </div>
</div>
