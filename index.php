<?php
require_once "controladores/formulario.controlador.php";
require_once "modelos/formulario.modelo.php";
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=" Yisusad ">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Agenda de Contactos</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Agenda Yisusad</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Redes Sociales</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Instagram</a>
              <a class="dropdown-item" href="#">Facebook </a>
              <a class="dropdown-item" href="#">Twitter </a>             
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="buscar" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </nav>

    <div  class="container">
      <h1 class="page-header text-center">Agenda de Contactos</h1>
      <div class="row">
        <div class="col-sm-12">
          <a href="#openModal" class="btn btn-primary" data-toggle="modal"><span class="fa fa-plus">
          </span> Nuevo Contacto </a>
            <?php
              session_start();

              if (isset($_SESSION['mensaje'])) {
                // Define la clase de la alerta según el contenido del mensaje
                $claseAlerta = ($_SESSION['mensaje'] == "El contacto ha sido registrado" || $_SESSION['mensaje'] == "El contacto ha sido actualizado" || $_SESSION['mensaje'] == "El contacto ha sido eliminado") ? 'alert-success' : 'alert-danger';
                ?>
                
                <div class="alert <?php echo $claseAlerta; ?> alert-dismissible" style="margin-top:20px">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $_SESSION['mensaje']; ?>
                </div>
            
                <?php
                unset($_SESSION['mensaje']); // Limpia el mensaje después de mostrarlo
              }
            ?>
          <table class="table table-bordered trable-striped" style="margin-top:20px">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include_once "modelos/conexion.php";

                $agregados = ControladorFormulario::ctrSeleccionarAgregados();

                foreach ($agregados as $key => $value) { ?>
                  <tr>
                    <td><?php echo $value['Nombre']; ?></td>
                    <td><?php echo $value['Telefono']; ?></td>
                    <td><?php echo $value['Correo']; ?></td>
                    <td><?php echo $value['Direccion']; ?></td>
                    <td>
                      <a href="#edit_<?php echo $value['idPersona']; ?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Editar</a>
                      <a href="#delete_<?php echo $value['idPersona']; ?>" class="btn btn-danger btn-sm" data-toggle="modal""><span class="fa fa-trash"></span> Eliminar</a>
                    </td>
                    <?php include('vistas/editDeleteModal.php'); ?>
                  </tr>
                 <?php 
                 } 
             ?>                      
            </tbody>
          </table>
        </div>
      </div>     
    </div><!-- /.container -->
    <?php include('vistas/openModal.php');?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
