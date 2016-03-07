<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../dist/images/favicon.png">

     <title>Registro Publico de la Propiedad y Notarías<?php echo $pagetitle;?></title>


    <!-- Bootstrap core CSS --> 
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dist/css/theme.css" rel="stylesheet">
    <link href="../dist/css/carousel.css" rel="stylesheet">
    <link href="../dist/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"> 

    <!-- Custom styles for this template --><!-- 
    <link href="../dist/css/jumbotron-narrow.css" rel="stylesheet">  -->

    <link href="../dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="../dist/css/normalize.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../dist/assets/js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" href="../dist/css/theme.css">

  </head>

<body id="index">

<div class="container">
    <div class="in">
      
    <header>
    <a href="/" class="logotipo">
      <img src="../dist/images/logotipo.png" 
        alt="Dirección General del Registro Publico de la Propiedad y Notarías">
    </a>
    <h1><?php echo $projectName;?></h1>


<!--     <div class="search">
        <div id='cse' style='width: 100%;'>
           <form method="get" action="http://www.google.com/search">
            <div>
            <table>
            <tr><td>
            <input type="text"   name="q" size="25"
            maxlength="255" value="" />
                  <button class="btn btn-primary" type="submit" id="buscar">
                   Buscar <span class="glyphicon glyphicon-search"></span>&nbsp;
                  </button>

          </td></tr>
            </td></tr></table>
            </div>

            </form>
        </div>
            <script src='//www.google.com/jsapi' type='text/javascript'>
            </script>
            <script type='text/javascript'>
                google.load('search', '1', {language: 'es', style: google.loader.themes.V2_DEFAULT});
                google.setOnLoadCallback(function() {
                var customSearchOptions = {};
                var orderByOptions = {};
                orderByOptions['keys'] = [{label: 'Relevance', key: ''} , {label: 'Date', key: 'date'}];
                customSearchOptions['enableOrderBy'] = true;
                customSearchOptions['orderByOptions'] = orderByOptions;
                customSearchControlchOptions['overlayResults'] = true;
                var customSearchControl =   new google.search.CustomSearchControl('004361597564169728449:ef3nqmmo1ds', customSearchOptions);
                customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
                var options = new google.search.DrawOptions();
                options.setAutoComplete(true);
                customSearchControl.draw('cse', options);
                }, true);
            </script>
    </div> -->


      <ul>
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="../views/tree.php">Directorio de Oficinas</a></li>
<!--       <li><a href="/">Directorio de Notarías</a></li>
      <li><a href="/">Portal Notarial</a></li> -->
      <li><a href="../views/about.php">Conócenos</a></li>
      <li><a href="../views/contact.php">Contacto</a></li>
      </ul>

    </header>


</div><!--// in //-->
      <div class="row marketing">
         <?php include($tpl);?>        
      </div>
</div><!--// container //-->



<!-- FOOTER -->
<footer>
    <div class="in">
        <ul>
      <li>
        <span>▪ Estamos para servirte</span>
        <p>
        <strong>Dirección General del Registro Público de la Propiedad y Notarías:</strong><br>
        <br>Calle Nueva S/N, Col. Noria Alta
        <br>Guanajuato, Gto. 36000
        <br>
        <br>Teléfono:
        <br>01 800 53 65 051
        <br>01(473) 734 16 14
        </p>
      </li>

      <li>
        <p><img src="http://sg.guanajuato.gob.mx/images/holagto.png"></p>
        <p><a href="http://sg.guanajuato.gob.mx/telefonosservicio.php" target="_blank">Teléfonos de servicio</a></p>
        <a href="http://www.guanajuato.gob.mx/telefonos-emergencia.php" target="_blank">
        <img src="http://sg.guanajuato.gob.mx/images/icon-phone.svg">Emergencias
        </a>
      </li>

      <li>
      <span>▪ No olvides que:</span>
      <p>
      <img src="http://sg.guanajuato.gob.mx/images/icon-mail.jpg">
      Tus <a href="contacto.php">comentarios</a> sobre el sitio
      son muy importantes </p>

      <p>
      <img src="http://sg.guanajuato.gob.mx/images/icon-smart.jpg">
      Sitio web compatible
      con dispositivos móviles
      </p>
      </li>
      </ul>


      <img src="http://sg.guanajuato.gob.mx/images/impulso-guanajuato.png" class="logoimpulso">
    </div><!-- in -->
</footer>

<div class="pie">
<div class="in text-center">
     <p>&copy; 2016 Guanajuato, Secretaría de Gobierno</p>
</div><!-- in -->
</div><!-- pie -->
</body>
</html>

