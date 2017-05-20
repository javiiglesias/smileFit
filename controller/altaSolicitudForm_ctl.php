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
	}
	else{
		$dieta = new dieta();
		$dietas = $dieta->altaDieta($descripcion,$fechaInicio,$fechaFin,$idCliente,$idTrabajador,$idSolicitud);
	}
	$mensaje = "Tu solicitud se ha creado correctamente!";
    require_once 'view/confirmacion.php';
}


//require_once 'view/lineasSolicitud.php';
require_once 'view/footer.php';

ob_end_flush();
?>