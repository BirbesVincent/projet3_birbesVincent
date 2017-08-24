<div class="content" style="margin:0; padding:0;">
        <div class="text-center">
            <p><img class="img-responsive" src="images/admin_logo.png" style="padding-top: 2%; padding-bottom: 2%;"></p>
        </div>

        <div class="col-lg-12 text-center">
            <form method="post">
                <a href="?p=admin.posts.addpost" class="btn btn-success">Ajouter un nouvel article</a>
            </form>
        </div>

        <img src="images/ligne.png" style=" width: 100%; margin: 2% 0% 1% 0%;">

        <div>
            <ul class="nav nav-tabs nav-justified">
                <li class="active" style="font-weight:bold; "><a href="#tab-articles" data-toggle="tab">Articles</a></li>
                <li style="font-weight:bold;"><a href="#tab-comments" data-toggle="tab">Commentaires</a></li>
                <?php if (!empty($reportedComments)){; ?>
                    <li style="background-color: #FF6F00; ; font-weight:bold;"><a href="#tab-reported-comments" data-toggle="tab">Commentaires Signalés</a></li>
                <<?php } else { ?>
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