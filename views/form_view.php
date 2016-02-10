    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Registro Público</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Agregar Registrador</a></li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- container -->
    <div class="container">

      <div class="starter-template">
        <div class="jumbotron">
        <h1>Registro Público de la Propiedad y Notarías</h1>
        <p class="lead">Directorio del Registro Público<br><br>Agregar nuevo Registrador</p>
        </div>
        <!-- Fomulario... -->
        <div align="left">

          <form class="form" role="form" method="post" action="../modulos/agregar.php">
            <div class="form-group">
              <label>Nombre Registrador</label>
              <input type="text" name="registrador" class="form-control" placeholder="Registrador" required="">
            </div>
           
            <div class="form-group" method="post" action="../modulos/agregar.php">
              <label>Municipio</label>
              <input type="text" name="municipio" class="form-control" placeholder="Municipio" required="">
            </div>

            <div class="form-group" method="post" action="../modulos/agregar.php">
              <label>Partido Judicial</label>
              <input type="text" name="pjudicial" class="form-control" placeholder="Partido Judicial" required="">
            </div>
            
            <div class="form-group" method="post" action="../modulos/agregar.php">
              <label>Domicilio</label>
              <input type="text" name="domicilio" class="form-control" placeholder="Domicilio" required="">
            </div>

            <div class="form-group" method="post" action="../modulos/agregar.php">
              <label>Tel. Registro Público</label>
              <input type="int" name="tel_registro" class="form-control" placeholder="Teléfono del Registro Público" required="">
            </div>

            <div class="form-group" method="post" action="../modulos/agregar.php">
              <label>Tel. Particular</label>
              <input type="int" name="tel_particular" class="form-control" placeholder="Teléfono del Registrador" required="">
            </div>

            <div class="form-group" method="post" action="../modulos/agregar.php">
              <label>Correo Electrónico</label>
              <input type="email" name="email" class="form-control" placeholder="E-mail del Registrador" required="">
            </div>


            <!--Boton-->
            <div>
              <button type="submit" class="btn btn-primary">Agregar Registrador</button>
            </div>

        </form>
        </div>
   

      </div>

    </div><!-- /.container -->
