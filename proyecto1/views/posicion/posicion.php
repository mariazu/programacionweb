<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Posicion.php');
      include ('../../controllers/PosicionController.php');
      include ('../../libs/Er.php');
  //session_start();
  include ('../layouts/header.php');
  if(isset($_POST['nombre'])){
    //echo "<pre>datos:";
    //print_r($datos);
    //echo "</pre>";
    $posicionC=new PosicionController();
    $posicionC->insertaPosicion($_POST);
}
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
                  Registro de Posiciones
              </h2>
              <br/>
              <!-- formulario registro de estadios -->
              <form id="formP" class="form-horizontal" role="form" action="" method="POST">
                  <!-- formulario Nombre -->
                  <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                      <div class="col-sm-8">
                          <input  class="form-control" id="nombre" name="nombre" >
                      </div>
                  </div>
                  <!-- formulario Ciudades -->
                  <div class="form-group">
                      <label  for="abreviatura" class="col-sm-4 control-label">Abreviatura</label>
                    <div class="col-sm-8">
                        <input  class="form-control" id="abreviatura" name="abreviatura" >   

                    </div>
                  </div>
                  <br/>
                  <div align="center" class="form-group">

                          <button type="submit" class="btn btn-success">Enviar</button>
                  </div>
                </form>
              <div class="col-md-4">               
              </div>
          </div>
      </div>
    </div>

      <?php include ('../layouts/footer.php'); ?>
            

    

  