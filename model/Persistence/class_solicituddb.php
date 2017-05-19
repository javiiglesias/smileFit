<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class solicituddb{

    private $solicitudes;
    public function __construct() {
        $solicitudes = array();
    }

    public function altaSolicitudDb($id,$titulo,$descripcion,$fecha,$idRol){

        $con = new db();
        $query=$con->prepare("INSERT INTO solicitud (Id, Titulo, Descripcion, Fecha, IdRol) VALUES (:id,:titulo,:descripcion,:fecha,:idRol)");
        $query->bindValue(":id", $id);
        $query->bindValue(":titulo", $titulo);
        $query->bindValue(":descripcion", $descripcion);
        $query->bindValue(":fecha", $fecha);
        $query->bindValue(":idRol", $idRol);
        $resutado = $con->consulta($query);

        if($resutado){
       
            return  new solicitud($id, $titulo, $descripcion, $fecha, $idRol);
        }
        return false;
    }

    public function consultarSolicitudDb($titulo,$descripcion,$fecha,$idRol){
        $con = new db();
        
        if($trabajador== null){

            $query=$con->prepare("SELECT Id,Nombre,Apellidos,FechaNacimiento,Email,Telefono,Foto,IdUsuario,IdRol FROM trabajador order by Id");
            $workers = array();

            $resultado=$con->consultarObjectes($query);

            foreach ($resultado as $row) {
                $id=$row["Id"];
                $nombre = $row["Nombre"];
                $apellidos = $row["Apellidos"];
                $fechaNacimiento = $row["FechaNacimiento"];    
                $email = $row["Email"];
                $telefono = $row["Telefono"];    
                $foto = $row["Foto"]; 
                $idUsuario = $row["IdUsuario"];   
                $idRol = $row["IdRol"];  
                    
                $worker = new trabajador($id,$nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto,$idUsuario,$idRol);
                array_push($workers,$worker);
            }

            return $workers;
        }
    }

    public function mostrarSolicitudesPendientesdb($idRol,$nSolicitud){
        $con = new db();
        if($nSolicitud== null){
             $query = $con->prepare("SELECT a.Id,a.Titulo,a.Descripcion,a.Fecha,a.IdRol FROM solicitud AS a WHERE a.IdRol=".$idRol);
        }else{
                $query = $con->prepare("SELECT * FROM solicitud where id=".$nSolicitud);
        }

        $solicitudes = array();
        
        $resultado=$con->consultarObjectes($query);

        foreach ($resultado as $row) {
                $id=$row["Id"];
                $titulo = $row["Titulo"];
                $descripcion = $row["Descripcion"];
                $fecha = $row["Fecha"]; 
                $idRol = $row["IdRol"];           
                $solicitud = new solicitud($id,$titulo,$descripcion,$fecha,$idRol);
                array_push($solicitudes,$solicitud);
        }

        $con = null;
        
        return $solicitudes;
    }

    public function mostrarSolicitudesClienteDb($nidSolicitudes){
        $con = new db();

        if($nidSolicitudes!= null){
            $solicitudes = array();

            foreach ($nidSolicitudes as $row) {
                $query = $con->prepare("SELECT a.Id,a.Titulo,a.Descripcion,a.Fecha,a.IdRol FROM solicitud AS a WHERE a.Id=".$row);

                $resultado=$con->consultarObjectes($query);

                foreach ($resultado as $row) {
                    $id=$row["Id"];
                    $titulo = $row["Titulo"];
                    $descripcion = $row["Descripcion"];
                    $fecha = $row["Fecha"]; 
                    $idRol = $row["IdRol"];           
                    $solicitud = new solicitud($id,$titulo,$descripcion,$fecha,$idRol);
                    array_push($solicitudes,$solicitud);
                }
            }             
        }

        
        return $solicitudes;
    }

    public function ObtenerUltimoIdSolicitudDb(){

        $con = new db();
        $query = $con->prepare("SELECT MAX(id) FROM solicitud");
        $resultado = $con->consultarObjectes($query);   
        return $resultado;
    }

    public function GetTituloSolicitudDb($idSolicitud){
        $con = new db();
        $query = $con->prepare("SELECT Titulo FROM solicitud WHERE Id = ".$idSolicitud);
        $query->bindValue(":idSolicitud", $idSolicitud);
        $resultado = $con->consultarObjectes($query);   
        return $resultado;
    }
}