<?php

class ControladorFormulario {

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

            $respuesta = ModeloFormulario::mdlAgregar($tabla, $datos);

            return $respuesta;

        }else{

            return "error";
        }

    }

    static public function ctrSeleccionarAgregados(){

		$tabla = "personas";

		$respuesta = ModeloFormulario::mdlSeleccionarAgregados($tabla);

		return $respuesta;

	}

    static public function ctrEditar(){

        if (isset($_POST["editar"])) {

            if (empty($_POST["nombreContacto"]) || empty($_POST["telefonoContacto"]) || empty($_POST["correoContacto"]) || empty($_POST["direccionContacto"])) {
                return "error"; // Si algún campo está vacío, retorna error
            }


            $id=$_GET["id"];
            $tabla = "personas";

            $datos = array("idPersona" => $id,
                            "nombre" => $_POST["nombreContacto"], 
                            "telefono" => $_POST["telefonoContacto"],
                            "correo" => $_POST["correoContacto"],
                            "direccion" => $_POST["direccionContacto"]);

            $respuesta = ModeloFormulario::mdlEditar($tabla, $datos);

            return $respuesta;

        }else{

            return "error";
        }
    }

    static public function ctrEliminar(){
        if (isset($_GET["id"])) {

            $id = $_GET["id"];
            $tabla = "personas";

            $respuesta = ModeloFormulario::mdlEliminar($tabla, $id);

            return $respuesta;
        } else {
            return "error";
        }
    }
}
