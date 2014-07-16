<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Revista.php');
      include ('../../controllers/RevistaController.php');
      include ('../../libs/Er.php');
  //session_start();
  include ('../layouts/header.php');

   if(isset($_POST['nombre'])){
    
    $revistaC=new RevistaController();
    $revistaC->insertaRevista($_POST);
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
               <h3 class="text-center text-success" >REGISTRO DE DATOS DE LA REVISTA</h3>
               <br/><br/>
               <!-- Inicio del formulario -->
               <form id="formRev" class="form-horizontal" role="form" action="" method="POST">

                  <!-- Nombre -->
                  <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="nombre" name="nombre" >
                      </div>
                  </div>
                  <!-- Portada -->
                  <div class="form-group">
                          <label class="col-md-4 control-label">Portada</label>
                      <div class="col-sm-4">
                          <input type="file" id="portada" name="portada">
                      </div>
                  </div>
                  <!-- Fecha -->
                  <div class="form-group">
                  <label class="col-md-4 control-label">Fecha</label>
                      <div class="col-md-4" class="form-group">
                          <div class='input-group date' id='datetimepicker5' data-date-format="YYYY/MM/DD">
                              <input type='text' class="form-control" name="fecha" />
                              <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
                  </div>
                </div>
                <!-- Volumen -->
                  <div class="form-group">
                          <label for="volumen" class="col-sm-4 control-label">Volumen</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="volumen" name="volumen" >
                      </div>
                  </div>
                  <!-- Titulo -->
                  <div class="form-group">
                          <label for="titulo" class="col-sm-4 control-label">Titulo</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="titulo" name="titulo" >
                      </div>
                  </div>
                  <!-- SubTitulo -->
                  <div class="form-group">
                          <label for="subtitulo" class="col-sm-4 control-label">Subtitulo</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="subtitulo" name="subtitulo" >
                      </div>
                  </div>
                  <!-- Numero -->
                  <div class="form-group">
                          <label for="numero" class="col-sm-4 control-label">N&uacute;mero</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="numero" name="numero" >
                      </div>
                  </div>
                  <!-- Clave -->
                  <div class="form-group">
                          <label for="clave" class="col-sm-4 control-label">Clave</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="clave" name="clave" >
                      </div>
                  </div>
                  <!-- Directorio -->
                  <div class="form-group">
                          <label for="directorio" class="col-sm-4 control-label">Directorio</label>
                      <div class="col-sm-4">
                          <textarea class="form-control" rows="3" name="directorio"></textarea>
                      </div>
                  </div>
                  <!-- Editorial -->
                  <div class="form-group">
                          <label for="editorial" class="col-sm-4 control-label">Editorial</label>
                      <div class="col-sm-4">
                          <textarea class="form-control" rows="3" name="editorial"></textarea>
                      </div>
                  </div>
                  
                  <!-- Estatus -->
                  <div class="form-group">
                          <label class="col-md-4 control-label">Estatus</label>
                      <div class="col-sm-4">
                          <select class="form-control">
                              <option>Seleccionar</option>
                              <option>Procesando</option>
                              <option>Venta</option>
                              <option>Impresa</option>
                              <option>Editando</option>
                              <option>Planeacion</option>
                            </select>
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

    
