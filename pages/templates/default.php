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
        <div class="logo">
            <a href="#"><img src="images/logo.png" class="img-responsive" alt="" /></a>
        </div>
        <div class="connexion-access">
            <a class="btn btn-danger" style="position:absolute; top: 3%; right: 3%;" href="index?p=login" role="button">Accès Administrateur</a>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="head-nav">
                <span class="menu"> </span>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
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

<div class="body-wrap" style="padding-top: 2%;  ">
    <div class="container">
        <?= $content; ?>
    </div>
</div>

<!-- footer -->
<div class="footer" style="padding-top: 2%;">
    <div class="container"  style="background-color: #1B242F">
    <div class="row">
        <div class="col-lg-4">
            <h4 class="text-center" style="padding-top: 5%; color: white">Qui suis-je ?</h4>
            <p>Oh dear! She's stuck in an infinite loop, and he's an idiot! Well, that's love for you.
                I had more, but you go ahead. Are you crazy? I can't swallow that. Check it out, y'all. Everyone who was invited is here.</p>
        </div>
        <div class="col-lg-4">
            <h4 class="text-center" style="padding-top: 5%; color: white">Pourquoi ce site ?</h4>
            <p>Oh dear! She's stuck in an infinite loop, and he's an idiot! Well, that's love for you.
                I had more, but you go ahead. Are you crazy? I can't swallow that. Check it out, y'all. Everyone who was invited is here.</p>
        </div>
        <div class="col-lg-4">
            <ul class="list-group" style="padding-top: 5%;">
                <li class="list-group-item" style="background-color: seagreen;"><a href="facebook.com"><img class="logo_social_networks" style="padding-right: 5%;" src="images/facebook_logo.png">FACEBOOK</a></li>
                <li class="list-group-item" style="background-color: seagreen;"><a href="twitter.com"><img class="logo_social_networks" style="padding-right: 5%;" src="images/twitter.png">TWITTER</a></li>
                <li class="list-group-item" style="background-color: seagreen;"><a href="instagram.com"><img class="logo_social_networks" style="padding-right: 5%;" src="images/instagram.png">INSTAGRAM</a></li>
            </ul>
        </div>
    </div>
    </div>
</div>
<!-- footer -->
</body>
</html>