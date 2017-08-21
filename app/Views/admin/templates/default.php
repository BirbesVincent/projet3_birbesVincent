<!DOCTYPE HTML>
<html>
<head>
    <title>Billet simple pour l'Alaska by Jean Forteroche</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=2136xmxc75rqszpcqb4fa0kg0yw0amafw4e8fslb1wwn0yzs"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<!-- header -->
<div class="banner">
    <div class="container">
        <div class="logo">
            <a href="#"><img src="images/logo.png" class="img-responsive" alt="" /></a>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="head-nav">
                <span class="menu"> </span>
                <ul>
                    <li><a href="index?p=admin.posts.index">Accueil de l'administration</a></li>
                    <li>
                        <a href="index?p=posts.index">Retour au site</a>
                    </li>
                    <div class="connexion-access">
                        <a class="btn btn-danger" style="position:absolute; top: 3%; right: 3%;" href="index?p=admin.users.logout" role="button">Se déconnecter</a>
                    </div>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <!-- script-for-nav -->
            <script>
                $( "span.menu" ).click(function() {
                    $( ".head-nav ul" ).slideToggle(300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- script-for-nav -->
        </div>
    </div>
</div>

<div class="body-wrap" style="padding-top: 1%;">
    <div class="container">
        <?= $content; ?>
    </div>

</body>
</html>