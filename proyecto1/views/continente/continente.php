<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Continente.php');
      include ('../../controllers/siteController/ContinenteController.php');
      include ('../../libs/Er.php');
  //session_start();
  include ('../layouts/header.php');
?>

      <div align="center">
          <img src="../images/fifa.jpg" />
      </div>
      
      <div align="center">
          <img width="150px" height="150px"  src="../images/2014fwcoe_4cf_ps.png" />
      </div>

    <div class="container">
      <div class="row">
          <div class="col-md-4">
                
          </div>
          <div class="col-md-4">
              <h2 class="bg-info" align="center">
                  <!-- Icono -->
                  Registro de Continentes
              </h2>
              <br/>
              <!-- formulario registro de estadios -->
              <form id="formCon" class="form-horizontal" role="form" action="" method="POST">
                  
                  <!-- nombre -->
                  <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" id="nombre" name="nombre" >
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

   