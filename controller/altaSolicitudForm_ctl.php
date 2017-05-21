<?php

ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = "Asignar Solicitud";

require_once 'view/header.php';
$trab=new trabajador();

$idTrabajador=$_REQUEST['idTrabajador'];
$idCliente=$_REQUEST['idCliente'];
$idSolicitud=$_REQUEST['idSolicitud'];
$fechaInicio=$_REQUEST['fechaInicio'];
$fechaFin=$_REQUEST['fechaFin'];
$descripcion=$_REQUEST['descripcion'];
$rol=$trab->getTrabajadorRol($_SESSION["test2"]);

if ($rol != null){
	if($rol == 1){
		$entrenamiento = new entrenamiento();
		$entrenamientos = $entrenamiento->altaEntrenamiento($descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud);
		$idEntrenamiento = $entrenamiento->ObtenerUltimoIdEntrenamiento();
                require_once 'view/altaEjercicio.php';
                
        }
	else{
		$dieta = new dieta();
		$dietas = $dieta->altaDieta($descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud);
		$idDieta = $dieta->ObtenerUltimoIdDieta();
                //var_dump($dietas);
                
                 $fechaFin=$dietas[0]->getFechaFin();
                $fecha=$dietas[0]->getFechaInicio();
                $resta=strtotime( $fechaFin) - strtotime($fecha);
                $diferencia_dias=intval($resta/60/60/24);
                //echo "La cantidad de días entre el ".$fecha." y".$fechaFin."  es <b>".$diferencia_dias."</b>";
                 //var_dump($diasTotales);
                //die();
                
                require_once 'view/altaDieta.php';
	}
	
}



require_once 'view/footer.php';

ob_end_flush();
?>