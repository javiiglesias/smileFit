<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class lineasolicituddb{

    private $lineasSolicitud;
    public function __construct() {
        $lineasSolicitud = array();
    }

    public function altaLineaSolicitudDb($idSolicitud,$idTrabajador,$idCliente,$descripcion){

        $con = new db();
        $query=$con->prepare("INSERT INTO lineasolicitud(IdSolicitud,IdTrabajador,IdCliente,Descripcion) VALUES (:idSolicitud,:idTrabajador,:idCliente,:descripcion)");

        $query->bindValue(":idSolicitud", $idSolicitud);
        $query->bindValue(":idTrabajador", $idTrabajador);
        $query->bindValue(":idCliente", $idCliente);
        $query->bindValue(":descripcion", $descripcion);
        $resutado = $con->consulta($query);

        if($resutado){

            return  new lineasolicitud($idSolicitud, $idTrabajador, $idCliente, $descripcion);
        }
        return false;
    }

    public function mostrarLineasPorIdSolicitudDb($idSolicitud){
        $con = new db();

        $query = $con->prepare("SELECT a.id,a.idSolicitud,a.idTrabajador,a.idCliente,a.descripcion FROM lineasolicitud as a WHERE a.IdSolicitud =:idSolicitud");
        $query->bindValue(":idSolicitud", $idSolicitud);

        $lineasSolicitudes = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["id"];                
                $idSolicitud = $row["idSolicitud"];
                $idTrabajador = $row["idTrabajador"];
                $idCliente = $row["idCliente"];            
                $descripcion = $row["descripcion"];
                $lineasSolicitud = new lineasolicitud($id,$idSolicitud,$idTrabajador,$idCliente,$descripcion);
                array_push($lineasSolicitudes,$lineasSolicitud);
        }
        $con = null;
        
        return $lineasSolicitudes;
    }

    public function getIdSolicitudClienteDb($idCliente){

        $con = new db();

        $query = $con->prepare("SELECT DISTINCT a.idSolicitud FROM lineasolicitud as a WHERE a.IdCliente =:idCliente");
        $query->bindValue(":idCliente", $idCliente);

        $lineasSolicitudes = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $idSolicitud = $row["idSolicitud"];           
                $lineasSolicitud = $idSolicitud;
                array_push($lineasSolicitudes,$lineasSolicitud);
        }
        $con = null;
        
        return $lineasSolicitudes;
    }
}