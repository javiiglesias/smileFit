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
                $this->setIdSolicitud(func_get_arg(1));
                $this->setIdTrabajador(func_get_arg(2));
                $this->setIdCliente(func_get_arg(3));
                $this->setDescripcion(func_get_arg(4));
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
        return $this->solicitud;
    }

    public function setIdSolicitud($fecha)
    {
        $this->solicitud = $solicitud;
    } 

    public function getIdTrabajador()
    {
        return $this->trabajador;
    }

    public function setTrabajador($trabajador)
    {
        $this->trabajador = $trabajador;
    } 

    public function getIdCliente()
    {
        return $this->cliente;
    }

    public function setIdCliente($cliente)
    {
        $this->cliente = $cliente;
    } 

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }  


    public function muestraLineaSolicitud($idSolicitud) {
        $lineasolicitud = new lineasolicituddb;
        $lineas = $lineasolicitud->mostrarLineasSolicituddb($idSolicitud);

        return $lineas;
    }
}