<?php

class ControladorAgregar{

    static public function ctrAgregar(){

        if (isset($_POST["guardar"])) {

            if (empty($_POST["nombreContacto"]) || empty($_POST["telefonoContacto"]) || empty($_POST["correoContacto"]) || empty($_POST["direccionContacto"])) {
                return "error"; // Si algún campo está vacío, retorna error
            }

            $tabla = "personas";

            $datos = array("nombre" => $_POST["nombreContacto"], 
                        "telefono" => $_POST["telefonoContacto"],
                        "correo" => $_POST["correoContacto"],
                        "direccion" => $_POST["direccionContacto"]);

            $respuesta = ModeloAgregar::mdlAgregar($tabla, $datos);

            return $respuesta;

        }else{

            return "error";
        }

    }

    static public function ctrSeleccionarAgregados(){

		$tabla = "personas";

		$respuesta = ModeloAgregar::mdlSeleccionarAgregados($tabla);

		return $respuesta;

	}
}
