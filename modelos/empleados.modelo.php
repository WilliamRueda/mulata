<?php

require_once "conexion.php";

class ModeloEmpleados
{

	static public function mdlMostrarEmpleados()
	{

		$stmt = Conexion::conectar()->prepare("SELECT 
        idrestaurante,
        idempleado,
        nombre,
        apellido,
        correo,
        telefono,
        direccion,
        idrol FROM empleados");

		$stmt->execute();

		return $stmt->fetchAll();

		$stmt = null;
	}


	static public function mdlRegistrarEmpleados($idrestaurante,
    $idempleado,
    $nombre,
    $apellido,
    $correo,
    $telefono,
    $direccion,
    $idrol)
	{

		$stmt = Conexion::conectar()->prepare("INSERT INTO empleados(idrestaurante,
        idempleado,
        nombre,
        apellido,
        correo,
        telefono,
        direccion,
        idrol) VALUES (:idrestaurante,:idempleado,:nombre,:apellido,:correo,:telefono,:direccion,:idrol)");

		$stmt->bindParam(":idrestaurante", $idrestaurante, PDO::PARAM_INT);
		$stmt->bindParam(":idempleado", $idempleado, PDO::PARAM_INT);
		$stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$stmt->bindParam(":apellido", $apellido, PDO::PARAM_STR);
		$stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $telefono, PDO::PARAM_INT);
        $stmt->bindParam(":direccion", $direccion, PDO::PARAM_STR);
		$stmt->bindParam(":idrol", $idrol, PDO::PARAM_INT);


		if ($stmt->execute()) {
			return "El producto se registró correctamente";
		} else {
			return "Error, no se pudo registrar el producto";
		}
		$stmt = null;
	}

	static public function mdlEliminarEmpleados($idempleado)
	{

		$stmt = Conexion::conectar()->prepare("DELETE FROM empleados WHERE idempleado= :idempleado");

		$stmt->bindParam(":idempleado", $idempleado, PDO::PARAM_INT);


		if ($stmt->execute()) {
			return "El empleado se eliminó correctamente";
		} else {
			return "Error, no se pudo eliminar el empleado";
		}

		$stmt = null;
	}

	

	static public function mdlActualizarEmpleados(
        $idrestaurante,
        $idempleado,
        $nombre,
        $apellido,
        $correo,
        $telefono,
        $direccion,
        $idrol)
	{


		$stmt = Conexion::conectar()->prepare("UPDATE empleados
		                                     SET nombre = :nombre, 
                                             apellido = :apellido,
                                             correo = :correo,
                                             telefono = :telefono,
												idrestaurante = :idrestaurante,
                                                direccion =:direccion,
                                                idrol =:idrol


		                                     WHERE idempleado = :idempleado");


		
		$stmt -> bindParam(":idrestaurante", $idrestaurante, PDO::PARAM_INT);
		$stmt -> bindParam(":idempleado", $idempleado, PDO::PARAM_INT);
		$stmt -> bindParam(":nombre", $nombre, PDO::PARAM_STR);
		$stmt -> bindParam(":apellido", $apellido, PDO::PARAM_STR);
		$stmt -> bindParam(":correo", $correo, PDO::PARAM_STR);
		$stmt -> bindParam(":telefono", $telefono, PDO::PARAM_INT);
        $stmt -> bindParam(":direccion", $direccion, PDO::PARAM_STR);
        $stmt -> bindParam(":idrol", $idrol, PDO::PARAM_INT);



		

		if ($stmt->execute()) {
			return "El producto se actualizó correctamente";
			if ($stmt->execute()) {
				return "El producto se actualizó correctamente";
			} else {
				"Error, no se pudo actualizar el producto";
			}
		}

		$stmt = null;
	}
}
