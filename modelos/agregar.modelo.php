<?php

include_once('conexion.php');

class ModeloAgregar{

    static public function mdlAgregar($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, telefono, correo, direccion) VALUES (:nombreContacto, :telefonoContacto, :correoContacto, :direccionContacto) ");

        $stmt->bindParam(":nombreContacto", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":telefonoContacto", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":correoContacto", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":direccionContacto", $datos["direccion"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();
        $stmt = null;
    }

    static public function mdlSeleccionarAgregados($tabla){
	
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt->execute();

			return $stmt -> fetchAll();

		$stmt = null;	

    }

}


