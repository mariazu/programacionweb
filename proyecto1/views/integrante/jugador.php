<?php 
  

  session_start();
  include ('../layouts/header.php');
?>
      
    <br/><br/><br/><br/>
    <div class="container">
      <div class="row">
          <div class="col-md-4">
                
          </div>
          <div class="col-md-4">
              <h2 class="bg-info" align="center">
                  <!-- Icono -->
                  Jugador
              </h2>
              <br/>
              <!-- formulario registro de estadios -->
              <form id="formJ" class="form-horizontal" role="form" action="" method="POST">
                <!-- Posicion -->
                  <div class="form-group">
                      <label  class="col-sm-4 control-label">Posici&oacute;n</label>
                    <div id="posicion" class="col-sm-6">
                      <select>
                        <option value="">Seleccionar</option>
                        <option value="mx">Delantero</option>
                        <option value="ho">Defensa</option>
                        <option value="ar">Centro</option>
                        <option value="al">Portero</option>
                      </select>
                    </div>
                  </div>

                  <!-- Numero -->
                  <div class="form-group">
                          <label for="numero" class="col-sm-4 control-label">N&uacute;mero</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" id="numero" name="numero" >
                      </div>
                  </div>
                  <br/>
                  <div align="center" class="form-group">

                          <button type="submit" name="submit" class="btn btn-success">Guardar</button>
                  </div>
                
                </form>
              <div class="col-md-4">               
              </div>
          </div>
      </div>
  </div>
            

    
<?php include ('../layouts/footer.php'); ?>