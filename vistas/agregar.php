<?php
session_start();

include_once('../modelos/conexion.php');
include_once('../controladores/formulario.controlador.php');
include_once('../modelos/formulario.modelo.php');

    $agregar = ControladorFormulario::ctrAgregar();

    if ($agregar == "ok") {
        $_SESSION['mensaje'] = "El contacto ha sido registrado";
        header('location: ../index.php');
        exit(); // Importante para detener la ejecución
    } else {
        $_SESSION['mensaje'] = "Por favor complete todos los campos";
        header('location: ../index.php'); // Redirige de nuevo para mostrar el mensaje en index.php
        exit();
    }    

?>