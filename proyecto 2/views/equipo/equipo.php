<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php');
      include ('../../controllers/EquipoController.php');
      include ('../../libs/Er.php');
  //session_start();
  include ('../layouts/header.php');

   if(isset($_POST['nombre'])){
    //echo "<pre>datos:";
    //print_r($datos);
    //echo "</pre>";
    $equipoC=new EquipoController();
    $equipoC->insertaEquipo($_POST);
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
                  Registro de Equipos
              </h2>
              <br/>
              <!-- formulario registro de equipos -->
              <form id="formEq" class="form-horizontal" role="form" action="" method="POST">

                  <!-- Nombre -->
                  <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                      <div class="col-sm-8">
                          <input  class="form-control" id="nombre" name="nombre" >
                      </div>
                  </div>
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

                  <!-- Escudo -->
                  <div class="form-group">
                      <label  for="escudo" class="col-sm-4 control-label">Escudo</label>
                    <div class="col-sm-6">
                      <input type="file" id="escudo" name="escudo">
                    </div>
                  </div>
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

    
