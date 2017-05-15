<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class solicituddb{

    private $solicitudes;
    public function __construct() {
        $solicitudes = array();
    }

    public function altaSolicitudDb($descripcion,$fecha,$idRol){

        $con = new db();
        $query=$con->prepare("INSERT INTO solicitud(Descripcion, Fecha, IdRol) VALUES (:descripcion,:fecha,:idRol)");

        $query->bindValue(":descripcion", $descripcion);
        $query->bindValue(":fecha", $fecha);
        $query->bindValue(":idRol", $idRol);
        $resutado = $con->consulta($query);

        if($resutado){
            $solicitud = $resutado[0];
            return  new solicitud($solicitud['descripcion'], $solicitud['fecha'], $solicitud['idRol']);
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