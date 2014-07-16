<?php 
  define('BASEURL','http://localhost:8080/programacionweb/proyecto1');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase programación web verano</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/justified-nav.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/justified-nav.css" rel="stylesheet">
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="../css/jquery.fancybox.css" type="text/css" media="screen" />

    <!-- Libreria Datetimepicker -->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../css/pygments-manni.css" />
    
    <!-- Libreria BootstrapValidator -->

    <link rel="stylesheet" href="../css/bootstrap.css"/>
  <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../css/mi.css" rel="stylesheet">
    <link href="../css/miestilo.css" rel="stylesheet">
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> </a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../site/inicio.php">Inicio</a></li>
            
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Revista  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Ver</a></li>
                <li class="divider"></li>
                <li><a href="../revista/revista.php">Registrar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Autor  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Ver</a></li>
                <li class="divider"></li>
                <li><a href="../autor/autor.php">Registrar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Estatus  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Ver</a></li>
                <li class="divider"></li>
                <li><a href="../status/status.php">Registrar</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Articulo  <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="">Ver</a></li>
                <li class="divider"></li>
                <li><a href="../articulo/articulo.php">Registrar</a></li>
              </ul>
            </li>

          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo BASEURL; ?>/views/site/login.php">
              <span class="glyphicon glyphicon-log-in"></span> Login</a>
            </li>
          </ul>
          

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

