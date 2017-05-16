<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class solicituddb{

    private $solicitudes;
    public function __construct() {
        $solicitudes = array();
    }

    public function altaSolicitudDb($titulo,$descripcion,$fecha,$idRol){

        $con = new db();
        $query=$con->prepare("INSERT INTO solicitud (Titulo, Descripcion, Fecha, IdRol) VALUES (:titulo,:descripcion,:fecha,:idRol)");

        $query->bindValue(":titulo", $titulo);
        $query->bindValue(":descripcion", $descripcion);
        $query->bindValue(":fecha", $fecha);
        $query->bindValue(":idRol", $idRol);
        $resutado = $con->consulta($query);
        var_dump($resutado);
        if($resutado){
       
            return  new solicitud($titulo, $descripcion, $fecha, $idRol);
        }
        return false;
    }

    public function mostrarSolicitudesPendientesdb($idRol,$nSolicitud){
        $con = new db();
        if($nSolicitud== null){
             $query = $con->prepare("SELECT a.Id,a.Descripcion,a.Fecha,a.IdRol FROM solicitud AS a WHERE a.IdRol=".$idRol);
        }else{
                $query = $con->prepare("SELECT * FROM solicitud where id=".$nSolicitud);
        }

        $solicitudes = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["Id"];
                $descripcion = $row["Descripcion"];
                $fecha = $row["Fecha"]; 
                $idRol = $row["IdRol"];           
                $solicitud = new solicitud($id,$descripcion,$fecha,$idRol);
                array_push($solicitudes,$solicitud);
        }
  
        $con = null;
        
        return $solicitudes;
    }
}