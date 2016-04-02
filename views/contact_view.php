<div class="container marketing">
  <div class="in">
    <br>
    <br>   
    <div class="row">
      <div class="formulario" id="f-contacto" >
       <form action="../views/contact.php" method="post">
        
        <div class="form-group">
          <p id="feedback"> <?php echo $feedback;?> </p> 
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"required="">
        </div>

        <div class="form-group" method="post">
          <label for="ciudadEd">Ciudad / Estado:</label>
          <input type="text" class="form-control" id="ciudadEd" name="ciudadEd" placeholder="Ciudad/Estado" required="">
        </div>

        <div class="form-group" method="post">
          <label for="email">Correo:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required="">
        </div>

        <div class="form-group" method="post">
          <label for="asunto">Asunto:</label>
          <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" required="">
        </div>

        <div class="form-group" method="post">
          <label for="comment">Mensaje:</label>
          <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Mensaje..." required=""></textarea>
        </div>

        <ul class="f-menu">
          <button  name="submit" class="btn btn-primary" value="submit" type="submit">Enviar Comentario</button>
        </ul>

        <?php include "contact_send.php"; ?>
       </form>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3">
          <img class="img-rounded" src="../dist/images/gto-gobierno.png" alt="Generic placeholder image" width="120" height="120">
    </div>
    <div class="col-lg-6">
      <p> <strong>Dirección General de Registros Públicos de la Propiedad y Notarías</strong>
      <br> <strong>Calle   Nueva S/N, Col. Noria Alta</strong>
      <br> <strong>C.P. 36050</strong>
      <br> <strong>Guanajuato, Gto.</strong>
      </p>
    </div>
    <div class="col-lg-3">
      <p><strong>Teléfono:<br></strong>
      <br><strong>01 800 53 65 051</strong>
      <br><strong>01(473) 734 16 14</p></strong>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12" align="center">
    <a href="/"><p><strong>www.rppc.guanajuato.gob.mx<br></strong></a>
    </div>
  </div>
  
</div><!-- IN -->
</div><!-- CONTAINER -->


