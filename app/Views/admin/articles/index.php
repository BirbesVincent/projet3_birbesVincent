<div class="container-fluid" style="margin:0; padding:0;">
        <div class="container-fluid">
            <div class="row" style="margin-top: 1%">
                <div class="col-lg-9">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-success">Pour Ajouter un chapitre : cliquer sur le lien "Ajouter un nouvel article"</li>
                        <li class="list-group-item list-group-item-success">Pour Modifier un chapitre : cliquer sur le lien "Editer"</li>
                        <li class="list-group-item list-group-item-success">Pour Supprimer un chapitre : cliquer sur le lien "Supprimer"</li>
                        <li class="list-group-item list-group-item-success">Pour Supprimer un commentaire : cliquer sur le lien "Ajouter un nouvel article"</li>
                        <li class="list-group-item list-group-item-success">Si des commentaires ont été signalés l'onglet "commentaires signalés" sera de couleur orange</li>
                    </ul>
                </div>
                <div class="col-lg-3 text-center">
                    <ul class="list-group">

                        <li class="list-group-item list-group-item-danger">
                            <div class="row">
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-xs btn-danger">
                                        <span class="glyphicon glyphicon-remove" style="color: white"></span>
                                    </button>
                                </div>
                                <div class="col-lg-10">
                                    Ce bouton permet de supprimer un commentaire
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-success">
                            <div class="row">
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-xs btn-success">
                                        <span class="glyphicon glyphicon-ok" style="color: white"></span>
                                    </button>
                                </div>
                                <div class="col-lg-10">
                                    Ce bouton permet de valider un commentaire et de l'enlever des commentaires signalés
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 0 0 2% 0">
            <div class="col-lg-12 text-center">
                <form method="post">
                    <a href="?p=admin.posts.addpost" class="btn btn-success">Ajouter un nouvel article</a>
                </form>
            </div>
        </div>
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