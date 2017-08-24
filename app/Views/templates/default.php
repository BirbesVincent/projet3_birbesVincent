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
    <link rel="stylesheet" href="../../public/font-awesome-4.7.0/css/font-awesome.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
<!-- header -->
<div class="banner">
    <div class="container">
        <nav class="navbar navbar-fixed-top navbar-inverse" style="font-size: 120%">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" data-target="#myNavbar" data-toggle="collapse" class="navbar-toggle">
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
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="body-wrap" style="padding-top: 1%; margin:auto;background: linear-gradient(#C4C3C6, white);">
    <div class="container" style="background-color: white">
        <?= $content; ?>
    </div>
</div>

<div class="footer">
    <div class="container">
        <!-- footer -->
        <?php require 'footer.php'; ?>
        <!-- footer -->
    </div>
</div>

</body>
</html>