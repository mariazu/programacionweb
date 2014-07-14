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
                  Entrenador
              </h2>
              <br/>
              <!-- formulario registro de estadios -->
              <form id="formEn" class="form-horizontal" role="form" action="" method="POST">
                 
                  <!-- Pais -->
                  <div class="form-group">
                      <label  class="col-sm-4 control-label">Pais</label>
                    <div class="col-sm-6">
                      <select>
                        <option value="">Seleccionar</option>
                        <option value="mx">M&eacute;xico</option>
                        <option value="ho">Holanda</option>
                        <option value="ar">Brasil</option>
                        <option value="al">Alemania</option>
                        <option value="br">Argentina</option>
                      </select>
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
  
