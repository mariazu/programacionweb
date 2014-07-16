<?php 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Articulo.php');
      include ('../../controllers/ArticuloController.php');
      include ('../../libs/Er.php');
  //session_start();
  include ('../layouts/header.php');

   if(isset($_POST['nombre'])){
    
    $articuloC=new ArticuloController();
    $articuloC->insertaArticulo($_POST);
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
               <h3 class="text-center text-success" >REGISTRO DE DATOS DEL ARTICULO</h3>
               <br/><br/>
               <!-- Inicio del formulario -->
               <form id="formArt" class="form-horizontal" role="form" action="" method="POST">

                  <!-- Nombre -->
                  <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">Nombre</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="nombre" name="nombre" >
                      </div>
                  </div>
                  <!-- Resumen -->
                  <div class="form-group">
                          <label for="resumen" class="col-sm-4 control-label">Resumen</label>
                      <div class="col-sm-4">
                          <textarea class="form-control" rows="3" name="resumen"></textarea>
                      </div>
                  </div>
                  <!-- abstract -->
                  <div class="form-group">
                          <label for="abstract" class="col-sm-4 control-label">Abstract</label>
                      <div class="col-sm-4">
                          <textarea class="form-control" rows="3" name="abstract"></textarea>
                      </div>
                  </div>
                  <!-- introduccion -->
                  <div class="form-group">
                          <label for="introduccion" class="col-sm-4 control-label">Introduccion</label>
                      <div class="col-sm-4">
                          <textarea class="form-control" rows="3" name="introduccion"></textarea>
                      </div>
                  </div>
                  <!-- metodologia -->
                  <div class="form-group">
                          <label for="metodologia" class="col-sm-4 control-label">Metodologia</label>
                      <div class="col-sm-4">
                          <textarea class="form-control" rows="3" name="metodologia"></textarea>
                      </div>
                  </div>
                  <!-- contenido -->
                  <div class="form-group">
                          <label for="contenido" class="col-sm-4 control-label">Contenido</label>
                      <div class="col-sm-4">
                          <textarea class="form-control" rows="3" name="contenido"></textarea>
                      </div>
                  </div>
                  <!-- Fecha -->
                  <div class="form-group">
                  <label class="col-md-4 control-label">Fecha de creacion</label>
                      <div class="col-md-4" class="form-group">
                          <div class='input-group date' id='datetimepicker5' data-date-format="YYYY/MM/DD">
                              <input type='text' class="form-control" name="fecha_creacion" />
                              <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                          </span>
                      </div>
                  </div>
                </div>
                
                <!-- PDF-->
                  <div class="form-group">
                          <label for="archivo_pdf" class="col-sm-4 control-label">Archivo pdf</label>
                      <div class="col-sm-4">
                          <input type="file" class="form-control" id="archivo_pdf" name="archivo_pdf" >
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
                  <!-- conclusiones -->
                  <div class="form-group">
                          <label for="conclusiones" class="col-sm-4 control-label">Conclusiones</label>
                      <div class="col-sm-4">
                          <textarea class="form-control" rows="3" name="conclusiones"></textarea>
                      </div>
                  </div>
                  <!-- PDF -->
                  <div class="form-group">
                          <label for="agradecimientos" class="col-sm-4 control-label">Agradecimientos</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="agradecimientos" name="agradecimientos" >
                      </div>
                  </div>
                  <!-- Referencias -->
                  <div class="form-group">
                          <label for="referencias" class="col-sm-4 control-label">Referencias</label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="referencias" name="referencias" >
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

    
