<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Status.php');
      include ('../../controllers/StatusController.php');
      include ('../../libs/Er.php');
  //session_start();
  include ('../layouts/header.php');

   if(isset($_POST['status'])){
    
      $statusC=new StatusController();
      $statusC->insertaStatus($_POST);
}
  
?>

      <!-- Inicio container -->
    <div class="container">
        <!-- fila 1 -->
        <div class="row">
            <div class="col-md-12">
                <!-- Columna 1 -->
                <div class="col-md-3">
                
                </div>
                <!-- Columna 2 -->
                <div class="estilo3" class="col-md-6">
                    
               <br/><br/><br/><br/>
               <h3 class="text-center text-success" >REGISTRO DE ESTATUS</h3>
               <br/><br/>
               <!-- Inicio del formulario -->
               <form id="formE" class="form-horizontal" role="form" action="" method="POST">

                  <!-- Nombre -->
                  <div class="form-group">
                          <label for="status" class="col-sm-4 control-label">Estatus</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="status" name="status" >
                      </div>
                  </div>
                  <br/><br/>
                  <div align="center" class="form-group">

                          <button type="submit" class="btn btn-success">Enviar</button>
                  </div>
                
                </form>
                <br/><br/>
                </div>
            
                <!-- Columna 3 -->
                <div class="col-md-3">
                
                </div>
            </div>
        </div>
        
    <!-- Fincontainer -->
    </div>
  
  <?php include ('../layouts/footer.php'); ?>          