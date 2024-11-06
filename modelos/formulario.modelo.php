<?php

include_once('conexion.php');

class ModeloFormulario {

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

    static public function mdlEditar($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, telefono = :telefono, correo = :correo, direccion = :direccion WHERE idPersona = :idPersona");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":idPersona", $datos["idPersona"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {    
            print_r(Conexion::conectar()->errorInfo());            
        }    

        $stmt->close();
        $stmt = null;
    }

    static public function mdlEliminar($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE idPersona = :idPersona");

        $stmt->bindParam(":idPersona", $datos, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();
        $stmt = null;
    }
}


