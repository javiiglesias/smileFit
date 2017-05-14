<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
class eventosdb {
    private $eventos;
    public function __construct() {
        $eventos = array();
    }
  
    public function getEventosPorTrabajadordb($trabajador){
        $con = new db();

        $query = $con->prepare("SELECT id,descripcion,fechaInicio,fechaFin,clase,url,clienteId,trabajadorId FROM eventos where trabajadorId=".$trabajador);
        $query->bindValue(":trabajador", $trabajador);
        $resultado = $con->consultarObjectes($query);

        $eventos = array();

        foreach ($resultado as $row) {
                $id = $row["id"];
                $descripcion = $row["descripcion"];
                $fechaInicio = $row["fechaInicio"];
                $fechaFin = $row["fechaFin"];    
                $clase = $row["clase"];             
                $url = $row["url"];
                $clienteId = $row['clienteId'];
                $trabajadorId = $row['trabajadorId'];
                $evento = new evento($id,$descripcion,$fechaInicio,$fechaFin,$clase,$url,$clienteId,$trabajadorId);
                array_push($eventos,$evento);
        }

        return $eventos;
    }
}
?>
