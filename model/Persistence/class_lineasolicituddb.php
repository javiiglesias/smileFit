<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class lineasolicituddb{

    private $lineasSolicitud;
    public function __construct() {
        $lineasSolicitud = array();
    }

    public function mostrarLineasPorIdSolicitudDb($idSolicitud){
        $con = new db();

        $query = $con->prepare("SELECT a.id,a.descripcion,a.idSolicitud,a.idTrabajador,a.idCliente FROM lineasolicitud as a WHERE a.IdSolicitud =:idSolicitud");
        $query->bindValue(":idSolicitud", $idSolicitud);

        $lineasSolicitudes = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["id"];
                $descripcion = $row["descripcion"];
                $idSolicitud = $row["idSolicitud"];
                $idTrabajador = $row["idTrabajador"];
                $idCliente = $row["idCliente"];            
                $lineasSolicitud = new lineasolicitud($id,$descripcion,$idSolicitud,$idTrabajador,$idCliente);
                array_push($lineasSolicitudes,$lineasSolicitud);
        }
        $con = null;
        
        return $lineasSolicitudes;
    }
}