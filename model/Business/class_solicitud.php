<?php
require_once("controller/function_AutoLoad.php");

class solicitud{
    private $id;
    private $descripcion;
    private $fecha;
    private $idRol;

    public function __construct()
    {

        switch (func_num_args()) {
            case 4:
                $this->setId(func_get_arg(0));
                $this->setDescripcion(func_get_arg(1));
                $this->setFecha(func_get_arg(2));
                $this->setIdRol(func_get_arg(3));
                break;
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }  

    public function getIdRol()
    {
        return $this->idRol;
    }

    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;
    }

    public function altaSolicitud($descripcion,$fecha,$idRol){

        $solicitudDB= new solicituddb();

        $solicitud = $solicitudDB->altaSolicitudDB($descripcion,$fecha,$idRol);

        return $solicitud;

    }

    public function muestraSolicitudesPendientes($idRol, $nSolicitud=null) {
        $solicitud = new solicituddb;
        $arraySolicitudes= $solicitud->mostrarSolicitudesPendientesdb($idRol,$nSolicitud);
        return $arraySolicitudes;
    }
}