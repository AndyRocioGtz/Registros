<!DOCTYPE html>
<html lang="es">
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

    <!-- Custom styles for this template -->
    <link href="../dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="../dist/css/normalize.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../dist/css/theme.css">

    <link rel="stylesheet" href="../dist/datatables/css/jquery.dataTables.css">
    <!-- <link href="..dist/datatables/css/jquery.dataTables.css"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../dist/datatables/js/jquery.js"></script>
    <script src="../dist/datatables/js/jquery.dataTables.js"></script>
   
    
    <script src="../dist/assets/js/ie-emulation-modes-warning.js"></script>



    

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

    <div>
      <ul>
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="../views/tree.php">Directorio de Oficinas</a></li>
      <li><a href="http://www.erpp.guanajuato.gob.mx/dirnot/" target="_blank">Directorio de Notarias</a></li>
      <!-- <li><a href="../views/directnotarios.php">Directorio de Notarias</a></li> -->
      <li><a href="../views/about.php">Conócenos</a></li>
      <!-- <li><a href="../views/contact.php">Contacto</a></li> -->
      </ul>
    </div>

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
          <p><img src="../dist/images/holagto.png"></p>
          <p><a href="http://sg.guanajuato.gob.mx/telefonosservicio.php" target="_blank">Teléfonos de servicio</a></p>
          <a href="http://www.guanajuato.gob.mx/telefonos-emergencia.php" target="_blank">
          <img src="http://sg.guanajuato.gob.mx/images/icon-phone.svg" target="_blank">Emergencias
          </a>
        </li>

        <li>
        <span>▪ No olvides que:</span>
        <p>
        <img src="../dist/images/icon-mail.jpg">
        Tus <!-- <a href="../views/contact.php"> -->comentarios<!-- </a> --> 
        sobre el sitio son muy importantes </p>

        <p>
        <img src="../dist/images/icon-smart.jpg">
        Sitio web compatible con dispositivos móviles
        </p>
        </li>
        </ul>


        <img src="../dist/images/impulso-guanajuato.png" class="logoimpulso">
      </div><!-- in -->
  </footer>

  <div class="pie">
    <div class="in text-center">
         <p>&copy; 2016 Guanajuato, Secretaría de Gobierno</p>
    </div><!-- in -->
    </div><!-- pie -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../dist/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../dist/datatables/js/jquery.js"></script>
    <script src="../dist/datatables/js/jquery.dataTables.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../dist/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../dist/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

