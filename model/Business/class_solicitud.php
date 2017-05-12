<?php
require_once("controller/function_AutoLoad.php");

class solicitud{
    private $id;
    private $descripcion;
    private $fecha;

    public function __construct()
    {

        switch (func_num_args()) {
            case 3:
                $this->setId(func_get_arg(0));
                $this->setDescripcion(func_get_arg(1));
                $this->setFecha(func_get_arg(2));
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


    // public function altaSolicitud($descripcion,$fecha){
    //     $solicitudDB = new solicituddb(); 
    //     $solicitud = $trabajadorDB->altaSolicitudDb($descripcion,$fecha); 
    //     return $solicitud;
    // }

    // public function getSolicitudesPendientes(){

    //     $solicitudDB = new solicituddb();
    //     $solicitud = $solicitudDB->consultarSolicitudDB($solicitud);
    //     return $solicitud;

    // }

    // public function setCliente($id,$descripcion,$fecha){
    //     $solicitudDB= new solicituddb();
    //     $solicitud = $solicitudDB->setSolicitudDB($id,$descripcion,$fecha);
    //     return $solicitud;

    // }

    // public function eliminarSolicitud($id){
    //     $solicitudDB= new solicituddb();
    //     $solicitud = $solicitudDB->eliminarSolicitudDB($id);
    //     return $solicitud;

    // }

    public function muestraSolicitudesPendientes($nSolicitud=null) {
        $solicitud = new solicituddb;
        $arraySolicitudes= $solicitud->mostrarSolicitudesPendientesdb($nSolicitud);

        return $arraySolicitudes;
    }
}