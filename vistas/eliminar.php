<?php
session_start();

include_once('../modelos/conexion.php');
include_once('../controladores/formulario.controlador.php');
include_once('../modelos/formulario.modelo.php');

    $eliminar = ControladorFormulario::ctrEliminar();

    if ($eliminar == "ok") {
        $_SESSION['mensaje'] = "El contacto ha sido eliminado";
        header('location: ../index.php');
        exit(); // Importante para detener la ejecución
    } else {
        $_SESSION['mensaje'] = "Error al eliminar el contacto";
        header('location: ../index.php'); // Redirige de nuevo para mostrar el mensaje en index.php
        exit();
    }    

?>