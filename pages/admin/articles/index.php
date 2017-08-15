<?php
    if ($_SESSION['auth_valid'] === false){
    header('Location:index.php');
    } else {
    if (isset($_SESSION['delete_article']) || isset($_SESSION['create_article']) || isset($_SESSION['delete_comment']))
    {
        if ($_SESSION['delete_article'] === true) {
            ?>
            <div class="alert alert-success">L'article à bien été supprimé !</div>
            <?php
            $_SESSION['delete_article'] = false;
        } elseif ($_SESSION['create_article'] === true) {
            ?>
            <div class="alert alert-success">L'article à bien été ajouté !</div>
            <?php
            $_SESSION['create_article'] = false;
        } elseif ($_SESSION['delete_comment'] === true) {
            ?>
            <div class="alert alert-success">Le commentaire à bien été supprimé !</div>
            <?php
            $_SESSION['delete_comment'] = false;
        }
    } else {
        $_SESSION['delete_article'] = false;
        $_SESSION['create_article'] = false;
        $_SESSION['delete_comment'] = false;
    }
        ?>
        <div class="text-center">
            <p><img class="img-responsive" src="images/admin_logo.png" style="padding-top: 2%; padding-bottom: 2%;"></p>
        </div>

        <div class="col-lg-12 text-center">
            <form method="post">
                <a href="?p=post.add" class="btn btn-success">Ajouter un nouvel article</a>
            </form>
        </div>

        <img src="images/ligne.png" style=" width: 100%; margin: 2% 0% 1% 0%;">

        <div>
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#tab-articles" data-toggle="tab">Articles</a></li>
                <li><a href="#tab-comments" data-toggle="tab">Commentaires</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab-articles">
                    <?php require 'articles_tab.php'; ?>
                </div>

                <div class="tab-pane" id="tab-comments">
                    <?php require 'comments_tab.php'; ?>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <?php
    }