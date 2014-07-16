<?php 
   
  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Integrante.php');
      include ('../../controllers/IntegranteController.php');
      include ('../../libs/Er.php');
  //session_start();
  include ('../layouts/header.php');
  if(isset($_POST['nombre'])){
    //echo "<pre>datos:";
    //print_r($datos);
    //echo "</pre>";
    $integranteC=new IntegranteController();
    $integranteC->insertaIntegrante($_POST);
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
                  Registro de Integrantes
              </h2>
              <br/>
              <!-- formulario registro de integrantes -->
              <form id="formI" class="form-horizontal" role="form" action="" method="POST">

                  <!-- Nombre -->
                  <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                      <div class="col-sm-8">
                          <input type="text" class="form-control" id="nombre" name="nombre" >
                      </div>
                  </div>
                  <!--  Apellido -->
                  <div class="form-group">
                      <label  for="apellido" class="col-sm-4 control-label">Apellido</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="apellido" name="apellido" >
                    </div>
                  </div>

                  <!-- Peso -->
                  <div class="form-group">
                      <label  for="peso" class="col-sm-4 control-label">Peso</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="peso" name="peso" >
                    </div>
                  </div>
                  <!-- Estatura -->
                  <div class="form-group">
                      <label  for="estatura" class="col-sm-4 control-label">Estatura</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="estatura" name="estatura" >
                    </div>
                  </div>
                  <!--  Edad -->
                  <div class="form-group">
                      <label  for="Edad" class="col-sm-4 control-label">Edad</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="Edad" name="Edad" >
                    </div>
                  </div>
                  <!-- Equipo -->
                  <div class="form-group">
                      <label  class="col-sm-4 control-label">Equipo</label>
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

                  <!-- foto -->
                  <div class="form-group">
                      <label  for="foto" class="col-sm-4 control-label">Foto</label>
                    <div class="col-sm-8">
                        <input type="file"  id="foto" name="foto" >
                    </div>
                  </div>

                  <div class="row">
                    <label   class="col-sm-4 control-label">Tipo de Integrante</label>

                    <div class="col-sm-4">
                      <p><a class="integrante" class="btn btn-lg btn-success" href="entrenador.php" role="button">
                      Entrenador</a></p>
                    </div>


                    <div class="col-sm-4"><p><a class="integrante" class="btn btn-lg btn-success" href="jugador.php" role="button">
                    Jugador</a></p>
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
            