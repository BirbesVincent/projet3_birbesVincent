

<div class="content" style="background: none">
    <div class="travelling">
        <?php foreach ( $posts as $post): ?>
         <div>
            <div class="wrap-post">
                 <div class="row">
                     <div class="col-lg-12 travelling1">
                         <div class="row">
                             <div class="col-lg-9">
                                <h1>
                                    <a href="<?= $post->url ?>"><?= $post->title; ?></a>
                                </h1>

                                 Posté le <?= $post->date; ?>
                             </div>
                         <div class="col-lg-3 text-center">
                             <div>
                                 <h3 style="padding:1%;color : white; background-color: #2E99AA; width: 100%; height: 100% ">
                                     <?= $post->nb_com; ?> commentaire(s)
                                 </h3>
                             </div>
                             <a href="<?= $post->url ?>" style="color : white;">
                                 <div style="padding:1%; color : white; background-color: #2E99AA; width: 100%; height: 100% " class="text-center">
                                     Lire la suite
                                 </div>
                             </a>
                         </div>

                         <div class="row">
                             <div class="col-lg-12" style="padding-top: 2%">
                                 <?= substr($post->content, 0, 600); ?>
                             </div>
                         </div>
         </div>
    <?php endforeach; ?>
    </div>
</div>
