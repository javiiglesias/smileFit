<?php
require_once("controller/function_AutoLoad.php");

class solicitud{
    private $id;
    private $titulo;
    private $descripcion;
    private $fecha;
    private $idRol;

    public function __construct()
    {

        switch (func_num_args()) {
            case 4:
                $this->setId(func_get_arg(null));
                $this->setTitulo(func_get_arg(0));
                $this->setDescripcion(func_get_arg(1));
                $this->setFecha(func_get_arg(2));
                $this->setIdRol(func_get_arg(3));
                break;
            case 5:
                $this->setId(func_get_arg(0));
                $this->setTitulo(func_get_arg(1));
                $this->setDescripcion(func_get_arg(2));
                $this->setFecha(func_get_arg(3));
                $this->setIdRol(func_get_arg(4));
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

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
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

    public function altaSolicitud($idSolicitud,$titulo,$descripcion,$fecha,$idRol){

        $solicitudDB= new solicituddb();
        $solicitud=array();
        $solicitud = $solicitudDB->altaSolicitudDB($idSolicitud,$titulo,$descripcion,$fecha,$idRol);
        return $solicitud;
    }

    public function muestraSolicitudesPendientes($idRol, $nSolicitud=null) {
        $solicitud = new solicituddb;
        $arraySolicitudes= $solicitud->mostrarSolicitudesPendientesdb($idRol,$nSolicitud);
        return $arraySolicitudes;
    }

    public function muestraSolicitudesCliente($nidSolicitudes=null) {
        
        $solicitud = new solicituddb;
        $arraySolicitudes= $solicitud->mostrarSolicitudesClienteDb($nidSolicitudes);
        return $arraySolicitudes;
    }

    public function ObtenerUltimoIdSolicitud(){

        $solicitud = new solicituddb;
        $idSolicitud= $solicitud->ObtenerUltimoIdSolicitudDb();
        return $idSolicitud;
    }

    public function GetTituloSolicitud($idSolicitud){

        $solicitud = new solicituddb;
        $titulo= $solicitud->GetTituloSolicitudDb($idSolicitud);
        return $titulo;
    }
}