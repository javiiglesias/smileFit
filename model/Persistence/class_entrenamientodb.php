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

        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud FROM entrenamiento");
        $trainings = array();

        $resultado = $con->consultarObjectes($query);
        
        foreach ($resultado as $row) {
            $id = $row["Id"];
            $descripcion = $row["Descripcion"];
            $fechaInicio = $row["FechaInicio"];
            $fechaFin = $row["FechaFin"];
            $idCliente = $row["IdCliente"];
            $idTrabajador = $row["IdTrabajador"];
            $idSolicitud = $row["IdSolicitud"];
            $training = new entrenamiento($id, $descripcion, $fechaInicio, $fechaFin, $idCliente, $idTrabajador,$idSolicitud);
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

    public function altaEntrenamientoDb($descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud) {
        //var_dump($descripcion." ".$fechaInicio." ".$fechaFin." ".$idCliente." ".$idTrabajador." ".$idSolicitud);
        $con = new db();
        $query = $con->prepare("INSERT INTO entrenamiento (Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud) VALUES (:descripcion,:fechaInicio,:fechaFin,:idCliente,:idTrabajador,:idSolicitud)");

        $query->bindValue(":descripcion", $descripcion);
        $query->bindValue(":fechaInicio", $fechaInicio);
        $query->bindValue(":fechaFin", $fechaFin);
        $query->bindValue(":idCliente", $idCliente);
        $query->bindValue(":idTrabajador", $idTrabajador);
        $query->bindValue(":idSolicitud", $idSolicitud);
        $resultado = $con->consulta($query);

        $con = null;

        return $resultado;
    }

    public function getEntrenamientosTrabajadorDb($idTrabajador){

        $con = new db();
        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud FROM entrenamiento WHERE IdTrabajador=".$idTrabajador);

        $trainings = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["Id"];
                $descripcion = $row["Descripcion"];
                $fechaInicio = $row["FechaInicio"];
                $fechaFin = $row["FechaFin"]; 
                $idCliente = $row["IdCliente"];           
                $idTrabajador = $row["IdTrabajador"];  
                $idSolicitud = $row["IdSolicitud"];  
                $training = new entrenamiento($id,$descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud);
                array_push($trainings,$training);
        }

        $con = null;
        
        return $trainings;
    }

    public function getEntrenamientosClienteDb($idCliente){

        $con = new db();
        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud FROM entrenamiento WHERE IdCliente=".$idCliente);

        $trainings = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["Id"];
                $descripcion = $row["Descripcion"];
                $fechaInicio = $row["FechaInicio"];
                $fechaFin = $row["FechaFin"]; 
                $idCliente = $row["IdCliente"];           
                $idTrabajador = $row["IdTrabajador"];  
                $idSolicitud = $row["IdSolicitud"];  
                $training = new entrenamiento($id,$descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud);
                array_push($trainings,$training);
        }

        $con = null;
        
        return $trainings;
    }

} ?>