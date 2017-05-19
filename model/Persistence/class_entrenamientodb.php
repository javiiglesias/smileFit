<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class entrenamientodb {

    private $entrenamientos;

    public function __construct() {
        $entrenamientos = array();
    }

    public function getEntrenamientosDb() {

        $con = new db();

        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador FROM entrenamiento");
        $trainings = array();

        $resultado = $con->consultarObjectes($query);

        foreach ($resultado as $row) {
            $id = $row["Id"];
            $descripcion = $row["Descripcion"];
            $fechaInicio = $row["FechaInicio"];
            $fechaFin = $row["FechaFin"];
            $idCliente = $row["IdCliente"];
            $idTrabajador = $row["IdTrabajador"];
            $training = new trabajador($id, $descripcion, $fechaInicio, $fechaFin, $idCliente, $idTrabajador);
            array_push($trainings, $training);
        }

        return $trainings;
    }

    
    public function eliminarEntrenamientoDB($id) {
        $con = new db();
        $query = $con->prepare("DELETE FROM entrenamiento WHERE id=:entrenamiento");
        $query->bindValue(":entrenamiento", $id);
        $resutado = $con->consulta($query);

        if ($resutado) {
            return true;
        }
        return false;
    }

    public function altaEntrenamientoDb($descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador) {
        $con = new db();
        $query = $con->prepare("INSERT INTO entrenamiento (Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador) VALUES (:descripcion,:fechaInicio,:fechaFin,:idCliente,:idTrabajador)");

        $query->bindValue(":descripcion", $descripcion);
        $query->bindValue(":fechaInicio", $fechaInicio);
        $query->bindValue(":fechaFin", $fechaFin);
        $query->bindValue(":idCliente", $idCliente);
        $query->bindValue(":idTrabajador", $idTrabajador);
        $resultado = $con->consulta($query);

        $con = null;

        return $resultado;
    }

    public function getEntrenamientosTrabajadorDb($idTrabajador){

        $con = new db();
        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador FROM entrenamiento WHERE IdTrabajador=".$idTrabajador);

        $trainings = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["Id"];
                $descripcion = $row["Descripcion"];
                $fechaInicio = $row["FechaInicio"];
                $fechaFin = $row["FechaFin"]; 
                $idCliente = $row["IdCliente"];           
                $idTrabajador = $row["IdTrabajador"];  
                $training = new entrenamiento($id,$descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador);
                array_push($trainings,$training);
        }

        $con = null;
        
        return $trainings;
    }

} ?>