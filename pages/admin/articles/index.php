<div class="text-center">
    <p><img src="../../../public/images/admin_logo.png"></p>
    <h1>Bienvenue dans l'espace d'administration</h1>

</div>

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