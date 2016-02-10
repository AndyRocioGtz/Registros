<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../dist/images/favicon.ico">

     <title>Registro Publico.<?php echo $pagetitle;?></title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../dist/css/jumbotron .css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../dist/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../dist/css/jumbotron-narrow.css" rel="stylesheet">

    <link href="../dist/css/carousel.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../dist/assets/js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" href="../dist/css/theme.css">

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="../index.php">Inicio</a></li>
            <li role="presentation"><a href="../views/about.php">Acerca</a></li>
            <li role="presentation"><a href="../views/contact.php">Contáctanos</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo $projectName;?> </h3>
      </div>

      <div class="jumbotron">
        <div class="row">
          <a href="/"><img class="logo"  src="../dist/images/gtoLogo.png" height="250" width="600"/></a>
        </div>
      </div>

      <div class="row marketing">
         <?php include($tpl);?>        
      </div>

      <footer class="footer">
        <p>&copy; 2016 Guanajuato, Secretaría de Gobierno</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../dist/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
