

<div class="content">
    <div class="travelling">
        <?php foreach ( $posts as $post): ?>
         <div>
            <div class="wrap-post">
                 <div class="row">
                     <div class="col-lg-12 travelling1" >
                         <div style="float: right">
                             <div>
                                 <h3 style="padding:3%;color : white; background-color: #FF6F00; width: 100%; height: 100% ">
                                     <?= $post->nb_com; ?> commentaires
                                 </h3>
                             </div>
                             <a href="<?= $post->url ?>" style="color : white;">
                                 <div style="padding:3%; color : white; background-color: #FF6F00; width: 100%; height: 100% " class="text-center">
                                 Lire la suite
                                 </div>
                             </a>
                         </div>
                        <div>
                            <h1>
                                <a href="<?= $post->url ?>"><?= $post->title; ?></a>
                            </h1>
                            <div>
                                Posté le <?= $post->date; ?>
                            </div>
                        </div>
                  <div class="row">
                        <div class="col-lg-12" style="padding-top: 2%">
                            <?= substr($post->content, 0, 600); ?>
                        </div>
                  </div>
                      </div>
                 </div>
                    <img src="images/ligne.png" style=" width: 100%; margin: 1% 0% 1% 0%;">
                </div>
         </div>
    <?php endforeach; ?>
    </div>
</div>
