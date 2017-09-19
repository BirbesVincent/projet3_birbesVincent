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
    <link rel="stylesheet" type='text/css' href="font-awesome-4.7.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<!-- header -->
<div class="banner">
    <div class="container">
        <nav class="navbar navbar-fixed-top navbar" style="font-size: 120%; background-color: #a7b5c3; font-family: 'Cooper Black'">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="col-lg-12"><a class="navbar-brand" href="index?p=posts.index">Billet Simple pour l'Alaska by Jean Forteroche</a></div>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index?p=posts.index">Accueil</a></li>
                        <li><a href="index?p=posts.archives">Archives</a></li>
                        <li><a href="index?p=admin.users.login" role="button">Administration</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="body-wrap" style="padding-top: 1%; margin:auto;background: linear-gradient(#C4C3C6, white);">
    <div class="container">
        <?= $content; ?>
    </div>
</div>

<!--
<div class="footer">
    <div class="container-fluid">
        <!-- footer -->
        <?php// require 'footer.php'; ?>
        <!-- footer -->
    </div>
</div>-->

</body>
</html>