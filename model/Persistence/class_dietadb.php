<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class dietadb {

    private $dietas;

    public function __construct() {
        $dietas = array();
    }

    public function getDietasDb() {

        $con = new db();

        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud FROM dieta");
        $diets = array();

        $resultado = $con->consultarObjectes($query);

        foreach ($resultado as $row) {
            $id = $row["Id"];
            $descripcion = $row["Descripcion"];
            $fechaInicio = $row["FechaInicio"];
            $fechaFin = $row["FechaFin"];
            $idCliente = $row["IdCliente"];
            $idTrabajador = $row["IdTrabajador"];
            $idSolicitud = $row["IdSolicitud"];
            $diet = new dieta($id, $descripcion, $fechaInicio, $fechaFin, $idCliente, $idTrabajador,$idSolicitud);
            array_push($diets, $diet);
        }

        return $diets;
    }

    
    public function eliminarDietaDB($id) {
        $con = new db();
        $query = $con->prepare("DELETE FROM dieta WHERE id=:dieta");
        $query->bindValue(":dieta", $id);
        $resutado = $con->consulta($query);

        if ($resutado) {
            return true;
        }
        return false;
    }

    public function altaDietaDb($descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud) {
        //var_dump($descripcion." ".$fechaInicio." ".$fechaFin." ".$idCliente." ".$idTrabajador." ".$idSolicitud);
        $con = new db();
        $query = $con->prepare("INSERT INTO dieta (Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud) VALUES (:descripcion,:fechaInicio,:fechaFin,:idCliente,:idTrabajador,:idSolicitud)");

        $query->bindValue(":descripcion", $descripcion);
        $query->bindValue(":fechaInicio", $fechaInicio);
        $query->bindValue(":fechaFin", $fechaFin);
        $query->bindValue(":idCliente", $idCliente);
        $query->bindValue(":idTrabajador", $idTrabajador);
        $query->bindValue(":idSolicitud", $idSolicitud);
        $resultado = $con->consulta($query);

      
        return $resultado;
       
    }
public function obtenerDietaSegunIdSolicitud($idSolicitud){
 $con = new db();
        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud FROM dieta WHERE IdSolicitud=".$idSolicitud);

        $diets = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["Id"];
                $descripcion = $row["Descripcion"];
                $fechaInicio = $row["FechaInicio"];
                $fechaFin = $row["FechaFin"]; 
                $idCliente = $row["IdCliente"];           
                $idTrabajador = $row["IdTrabajador"];  
                $idSolicitud = $row["IdSolicitud"];  
                $diet = new dieta($id,$descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud);
                array_push($diets,$diet);
        }

        $con = null;
        
        return $diets;
    }

    


public function getDietasTrabajadorDb($idTrabajador){

        $con = new db();
        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud FROM dieta WHERE IdTrabajador=".$idTrabajador);

        $diets = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["Id"];
                $descripcion = $row["Descripcion"];
                $fechaInicio = $row["FechaInicio"];
                $fechaFin = $row["FechaFin"]; 
                $idCliente = $row["IdCliente"];           
                $idTrabajador = $row["IdTrabajador"];  
                $idSolicitud = $row["IdSolicitud"];  
                $diet = new dieta($id,$descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud);
                array_push($diets,$diet);
        }

        $con = null;
        
        return $diets;
    }

    public function getDietasClienteDb($idCliente){

        $con = new db();
        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud FROM dieta WHERE IdCliente=".$idCliente);

        $diets = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["Id"];
                $descripcion = $row["Descripcion"];
                $fechaInicio = $row["FechaInicio"];
                $fechaFin = $row["FechaFin"]; 
                $idCliente = $row["IdCliente"];           
                $idTrabajador = $row["IdTrabajador"];  
                $idSolicitud = $row["IdSolicitud"];  
                $diet = new dieta($id,$descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud);
                array_push($diets,$diet);
        }

        $con = null;
        
        return $diets;
    }

    public function comprobarDietaDb($idSolicitud) {

        $con = new db();

        $query = $con->prepare("SELECT Id,Descripcion,FechaInicio,FechaFin,IdCliente,IdTrabajador,IdSolicitud FROM dieta WHERE IdSolicitud=".$idSolicitud);

        $resultado = $con->consultarObjectes($query);
        
        if(count($resultado)){
            return true;
        }
        else{
            return false;
        }
    }

    public function obtenerUltimoIdDietaDb(){

        $con = new db();
        $query = $con->prepare("SELECT MAX(id) FROM dieta");
        $resultado = $con->consultarObjectes($query);   
        return $resultado;
    }

} ?>