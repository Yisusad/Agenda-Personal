<?php
session_start();

include_once('../modelos/conexion.php');
include_once('../controladores/agregar.controlador.php');
include_once('../modelos/agregar.modelo.php');

    $agregar = ControladorAgregar::ctrAgregar();

    if ($agregar == "ok") {
        $_SESSION['mensaje'] = "El usuario ha sido registrado";
        header('location: ../index.php');
        exit(); // Importante para detener la ejecución
    } else {
        $_SESSION['mensaje'] = "Por favor complete todos los campos";
        header('location: ../index.php'); // Redirige de nuevo para mostrar el mensaje en index.php
        exit();
    }    

?>