<?php
require_once("controller/function_AutoLoad.php");

class lineasolicitud{
    private $id;
    private $idSolicitud;
    private $idTrabajador;
    private $idCliente;
    private $descripcion;

    public function __construct()
    {

        switch (func_num_args()) {
            case 5:
                $this->setId(func_get_arg(0));
                $this->setDescripcion(func_get_arg(1));
                $this->setIdSolicitud(func_get_arg(2));
                $this->setIdTrabajador(func_get_arg(3));
                $this->setIdCliente(func_get_arg(4));
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

    public function getIdSolicitud()
    {
        return $this->idSolicitud;
    }

    public function setIdSolicitud($idSolicitud)
    {
        $this->idSolicitud = $idSolicitud;
    } 

    public function getIdTrabajador()
    {
        return $this->idTrabajador;
    }

    public function setIdTrabajador($idTrabajador)
    {
        $this->idTrabajador = $idTrabajador;
    } 

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    } 

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }  


    public function muestraLineasPorIdSolicitud($idSolicitud) {
        $lineasolicitud = new lineasolicituddb;
        $lineas = $lineasolicitud->mostrarLineasPorIdSolicitudDb($idSolicitud);
        return $lineas;
    }
}