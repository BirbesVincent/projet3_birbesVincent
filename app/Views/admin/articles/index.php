<div class="container-fluid" style="margin:0; padding:0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="margin: 1% 0% 0% 0%">
                    <h4>Bienvenue sur votre Espace d'administration</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Pour Ajouter un chapitre : cliquer sur le lien "Ajouter un nouvel article"</li>
                        <li class="list-group-item list-group-item-success">Pour Modifier un chapitre : cliquer sur le lien "Editer"</li>
                        <li class="list-group-item list-group-item-success">Pour Supprimer un chapitre : cliquer sur le lien "Supprimer"</li>
                        <li class="list-group-item list-group-item-success">Pour Supprimer un commentaire : cliquer sur le lien "Ajouter un nouvel article"</li>
                    </ul>
                </div>
                <div class="col-lg-4 text-center">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-warning">Si des commentaires ont été signalés par les lecteurs l'onglet "commentaires signalés" sera de couleur orange</li>
                        <li class="list-group-item list-group-item-danger">Toute suppression d'article ou de commentaire est définitive</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-12 text-center">
            <form method="post">
                <a href="?p=admin.posts.addpost" class="btn btn-success">Ajouter un nouvel article</a>
            </form>
        </div>

        <img src="images/ligne.png" style=" width: 100%; ">

        <div>
            <ul class="nav nav-tabs nav-justified">
                <li class="active" style="font-weight:bold; "><a href="#tab-articles" data-toggle="tab">Articles</a></li>
                <li style="font-weight:bold;"><a href="#tab-comments" data-toggle="tab">Commentaires</a></li>
                <?php if (!empty($reportedComments)){; ?>
                    <li style="background-color: #FF6F00; ; font-weight:bold;"><a href="#tab-reported-comments" data-toggle="tab">Commentaires Signalés</a></li>
                <?php } else { ?>
                    <li style="font-weight:bold;"><a href="#tab-reported-comments" data-toggle="tab">Commentaires Signalés</a></li>
                <?php }; ?>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-articles">
                    <?php require 'Tab/articles_tab.php'; ?>
                </div>

                <div class="tab-pane" id="tab-comments">
                    <?php require 'Tab/comments_tab.php'; ?>
                </div>
                <div class="tab-pane" id="tab-reported-comments">
                    <?php require 'Tab/reportedComment_tab.php'; ?>
                </div>
            </div>
        </div>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>