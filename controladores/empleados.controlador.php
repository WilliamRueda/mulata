<?php

class ControladorEmpleados
{

    static public function ctrMostrarEmpleados()
    {

        $respuesta = ModeloEmpleados::mdlMostrarEmpleados();

        return $respuesta;
    }




    static public function ctrRegistrarEmpleados(
        $idrestaurante,
        $idempleado,
        $nombre,
        $apellido,
        $correo,
        $telefono,
        $direccion,
        $idrol
    ) {
        $respuesta = ModeloEmpleados::mdlRegistrarEmpleados(
            $idrestaurante,
            $idempleado,
            $nombre,
            $apellido,
            $correo,
            $telefono,
            $direccion,
            $idrol
        );

        return $respuesta;
    }

    static public function ctrEliminarEmpleados($idproducto)
    {

        $respuesta = ModeloEmpleados::mdlEliminarEmpleados($idproducto);

        return $respuesta;
    }

    static public function ctrActualizarEmpleados(
        $idrestaurante,
        $idempleado,
        $nombre,
        $apellido,
        $correo,
        $telefono,
        $direccion,
        $idrol
    ) {

        $respuesta = ModeloEmpleados::mdlActualizarEmpleados(
            $idrestaurante,
            $idempleado,
            $nombre,
            $apellido,
            $correo,
            $telefono,
            $direccion,
            $idrol
        );

        return $respuesta;
    }
}
