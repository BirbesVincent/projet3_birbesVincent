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
        <nav class="navbar navbar-fixed-top navbar" style="font-size: 180%; background-color: #c4d1d5; font-family: 'Cooper Black'">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-target="#myNavbar" data-toggle="collapse" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index?p=posts.index">Billet Simple pour l'Alaska by Jean Forteroche</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index?p=posts.index">Accueil</a></li>
                        <li><a href="index?p=posts.archives">Archives</a></li>
                        <li><a href="index?p=admin.users.login" role="button">Administration</a></li>
                        <?php if ($success_auth = true): ?>
                            <li><a class="btn btn-danger" style="color: white" href="index?p=admin.users.logout" role="button">Se déconnecter</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="body-wrap" style="padding-top: 1%; background: linear-gradient(#C4C3C6, white);">
    <div class="container" style="background-color: white">
        <?= $content; ?>

</div>

</body>
</html>