<?php
require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");
class eventosdb {
    private $eventos;
    public function __construct() {
        $eventos = array();
    }
  
    public function mostrarEventodb($nEvento){
        $con = new db();
        if($nEvento== null){
            echo "nevento == null";
            $query = $con->prepare("SELECT * FROM eventos");
        }else{
            echo "nevento != null";
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
                $clienteId = $row["ClienteId"];
                $trabajadorId = $row["TrabajadorId"];
                //array_push($eventos,$evento);
        }
        
        $con = null;
        echo json_encode(array('success' => 1, 'result' => $result));
        return $eventos;
    }

    public function getEventosPorTrabajadordb($trabajador){
        $con = new db();

        $query = $con->prepare("SELECT id,descripcion,fechaInicio,fechaFin,clase,url,clienteId,trabajadorId FROM eventos where trabajadorId=".$trabajador);
        $query->bindValue(":user", $trabajador);
        $resutado = $con->consultarObjectes($query);
        $eventos = array();
      
        if($resutado){
            $trabajador = $resutado[0];
            return new evento($trabajador['id'], $trabajador['descripcion'], $trabajador['fechaInicio'], $trabajador['fechaFin'], $trabajador['clase'], $trabajador['url'], $trabajador['clienteId'], $trabajador['trabajadorId']);
        }

        return false;
    }
}
?>
