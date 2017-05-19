<?php
require_once("controller/function_AutoLoad.php");
class entrenamiento{
    private $id;
    private $descripcion;
    private $fechaInicio;
    private $fechaFin;
    private $idCliente;
    private $idTrabajador;
    private $idSolicitud;

    public function __construct()
    {

        switch (func_num_args()) {
            case 7:
                $this->setId(func_get_arg(0));
                $this->setDescripcion(func_get_arg(1));
                $this->setFechaInicio(func_get_arg(2));
                $this->setFechaFin(func_get_arg(3));
                $this->setIdCliente(func_get_arg(4));
                $this->setIdTrabajador(func_get_arg(5));
                $this->setIdSolicitud(func_get_arg(6));
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

    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }

    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function getIdTrabajador()
    {
        return $this->idTrabajador;
    }


    public function setIdTrabajador($idTrabajador)
    {
        $this->idTrabajador = $idTrabajador;
    }

    public function getIdSolicitud()
    {
        return $this->idSolicitud;
    }


    public function setIdSolicitud($idSolicitud)
    {
        $this->idSolicitud = $idSolicitud;
    }


    public function getEntrenamientos(){
        $entrenamientoDB = new entrenamientodb();
        $entrenamientos = $entrenamientoDB->getEntrenamientosDb();
        return $entrenamientos;
    }    

    public function altaEntrenamiento($descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud){
        $trabajadorDB = new entrenamientodb();
        $trabajador = $trabajadorDB->altaEntrenamientoDb($descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud); 
        return $trabajador;
    }

    public function eliminarEntrenamiento($id){
        $entrenamientoDB= new entrenamientodb();
        $entrenamiento = $entrenamientoDB->eliminarEntrenamientoDB($id);
        return $entrenamiento;

    }

    public function getEntrenamientosTrabajador($idTrabajador){
        $entrenamientoDB = new entrenamientodb;
        $arrayEntrenamientos= $entrenamientoDB->getEntrenamientosTrabajadorDb($idTrabajador);
        return $arrayEntrenamientos;
    }
}