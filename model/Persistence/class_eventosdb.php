<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
class eventosdb {
    private $eventos;
    public function __construct() {
        $eventos = array();
    }
  
    public function mostrarNoticiadb($nEvento){
        $con = new db();
        if($nEvento== null){
             $query = $con->prepare("SELECT * FROM eventos");
        }else{
                $query = $con->prepare("SELECT * FROM eventos where id=".$nEvento);
        }
        $eventos = array();
        
        $resultado=$con->consultarObjectes($query);
      
        foreach ($resultado as $row) {
                $id=$row["Id"];
                $descripcion = $row["Descripcion"];
                $fechaInicio = $row["FechaInicio"];
                $fechaFin = $row["FechaFin"];    
                $clase = $row["Clase"];             
                $url = $row["Url"];
                $clienteId = $row["IdCliente"];
                $trabajadorId = $row["IdTrabajador"];
                array_push($eventos,$evento);
        }
        
        $con = null;
        
        return $eventos;
    }


}
?>
