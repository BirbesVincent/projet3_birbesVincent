<!--<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>T</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">BlogOPC</a>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="starter-template" style="padding-top: 100px;">

      $content

      </div>

    </div>
  </body>
</html>-->

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
                    <li class="active"><a href="index.php">Accueil</a></li>
                    <li><a href="#">A propos de l'auteur</a></li>
                    <li><a href="#">Archives</a></li>
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

<div class="body-wrap">
    <div class="container">
        <?= $content; ?>
    </div>



<!-- footer -->
<div class="footer">
    <div class="container">
        <p>Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
        <div class="social">
            <ul>
                <li><a href="#"><i class="fb"> </i></li></a>
                <li><a href="#"><i class="twt"> </i></li></a>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</div>
<!-- footer -->
</body>
</html>