<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class solicituddb{

    private $solicitudes;
    public function __construct() {
        $solicitudes = array();
    }

    public function mostrarSolicitudesPendientesdb($nSolicitud){
        $con = new db();
        if($nSolicitud== null){
             $query = $con->prepare("SELECT a.Id,a.Descripcion,a.Fecha FROM solicitud AS a INNER JOIN lineasolicitud AS b ON a.Id = b.IdSolicitud WHERE b.IdTrabajdor = NULL");
        }else{
                $query = $con->prepare("SELECT * FROM solictud where id=".$nSolicitud);
        }
        $solicitudes = array();
        
        $resultado=$con->consultarObjectes($query);
      
        foreach ($resultado as $row) {
                $id=$row["Id"];
                $descripcion = $row["Descripcion"];
                $fecha = $row["Fecha"];            
                $solicitud = new solicitud($id,$descripcion,$fecha);
                array_push($solicitudes,$solicitud);
        }
  
        $con = null;
        
        return $solicitudes;
    }

    // public function consultarSolicitudDB(){
    //     $con = new db();
    //     $query=$con->prepare("SELECT id,descripcion,fecha FROM solicitud");
    //     $resutado = $con->consultarObjectes($query);


    //     if($resutado){
    //         $cliente = $resutado[0];

    //         return  new cliente($cliente['id'], $cliente['nombre'], $cliente['apellidos'], $cliente['edad'], $cliente['email'],$cliente['telefono'],$cliente['foto']);
    //     }

    //     return false;
    // }

    // public function setClienteDB($id,$nombre,$apellidos,$edad,$email,$telefono,$foto){
    //     $con = new db();
    //     $query=$con->prepare("UPDATE cliente set nombre=:nombre , apellidos=:apellidos , edad=:edad ,email=:email, telefono=:telefono , foto=:foto where id= :cliente");
    //     $query->bindValue(":cliente", $id);
    //     $query->bindValue(":nombre", $nombre);
    //     $query->bindValue(":apellidos", $apellidos);
    //     $query->bindValue(":edad", $edad);
    //     $query->bindValue(":email", $email);
    //     $query->bindValue(":telefono", $telefono);
    //     $query->bindValue(":foto", $foto);
    //     $resutado = $con->consulta($query);

    //     if($resutado){
    //         $cliente = $resutado[0];

    //         return  new cliente($cliente['id'], $cliente['nombre'], $cliente['apellidos'], $cliente['edad'], $cliente['email'],$cliente['telefono'],$cliente['foto']);
    //     }
    //     return false;

    // }

    // public function eliminarClienteDB($id){
    //     $con = new db();
    //     $query=$con->prepare("DELETE FROM cliente WHERE id=:cliente");
    //     $query->bindValue(":cliente", $id);
    //     $resutado = $con->consulta($query);

    //     if($resutado){
    //        return true;
    //     }
    //     return false;

    // }

    // public function añadirClienteDB($nombre,$apellidos,$edad,$email,$telefono,$foto, $idUser){

    //     $con = new db();
    //     $query=$con->prepare("INSERT INTO cliente(Nombre, Apellidos, Edad, Email, Telefono, Foto, IdUsuario) VALUES (:nombre,:apellidos,:edad,:email,:telefono,:foto,:idUser)");

    //     $query->bindValue(":nombre", $nombre);
    //     $query->bindValue(":apellidos", $apellidos);
    //     $query->bindValue(":edad", $edad);
    //     $query->bindValue(":email", $email);
    //     $query->bindValue(":telefono", $telefono);
    //     $query->bindValue(":foto", $foto);
    //     $query->bindValue(":idUser", $idUser);
    //     $resutado = $con->consulta($query);

    //     if($resutado){
    //         $cliente = $resutado[0];

    //         return  new cliente($cliente['nombre'], $cliente['apellidos'], $cliente['edad'], $cliente['email'],$cliente['telefono'],$cliente['foto'],$cliente['idUser']);
    //     }
    //     return false;
    // }
}