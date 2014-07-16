<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Autor.php');
      include ('../../controllers/AutorController.php');
      include ('../../libs/Er.php');
  //session_start();
  include ('../layouts/header.php');

   if(isset($_POST['nombre'])){
    
      $autorC=new AutorController();
      $autorC->insertaAutor($_POST);
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
               <h3 class="text-center text-success" >REGISTRO DE DATOS DE AUTOR</h3>
               <br/><br/>
               <!-- Inicio del formulario -->
               <form id="formA" class="form-horizontal" role="form" action="" method="POST">

                  <!-- Nombre -->
                  <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="nombre" name="nombre" >
                      </div>
                  </div>
                <!-- Apellidos -->
                  <div class="form-group">
                          <label for="apellidos" class="col-sm-4 control-label">Apellidos</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="apellidos" name="apellidos" >
                      </div>
                  </div>
                  <!-- Email -->
                  <div class="form-group">
                          <label for="email" class="col-sm-4 control-label">Email</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="email" name="email" >
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