<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Pais.php');
      include ('../../controllers/PaisController.php');
      include ('../../libs/Er.php');
  //session_start();
  include ('../layouts/header.php');
  if(isset($_POST['nombre'])){
    //echo "<pre>datos:";
    //print_r($datos);
    //echo "</pre>";
    $paisC=new PaisController();
    $paisC->insertaPais($_POST);
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
                  Registro de Paises
              </h2>
              <br/>
              <!-- formulario registro de estadios -->
              <form id="formPa" class="form-horizontal" role="form" action="" method="POST">
                  <!-- formulario Nombre -->
                  <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                      <div class="col-sm-8">
                          <input  class="form-control" id="nombre" name="nombre" >
                      </div>
                  </div>
                  <!-- formulario Bandera -->
                  <div class="form-group">
                      <label  for="bandera" class="col-sm-4 control-label">Bandera</label>
                    <div class="col-sm-6">
                      <input type="file" id="bandera" name="bandera">
                    </div>
                  </div>
                  <!-- formulario Continente -->
                  <div class="form-group">
                      <label  class="col-sm-4 control-label">Continente</label>
                    <div class="col-sm-6">
                      <select id="pais">
                        <option value="">Seleccionar</option>
                        <option value="mx">Am&eacute;rica</option>
                        <option value="ho">Europa</option>
                        <option value="ar">Asia</option>
                        <option value="al">Africa</option>
                        <option value="br">Oceania</option>
                      </select>
                    </div>
                  </div>
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
    

    