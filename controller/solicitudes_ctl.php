<?php

ob_start();

$titlePage = "Solicitudes pendientes de asignar";

require_once 'view/header.php';

$usuarios = new usuario();

if(isset($_SESSION["test2"])){
   $idUser= $_SESSION["test2"];
}

//obtenemos el usuario actual
$usuarioRol = $usuarios->getUserPorId($idUser);
//si es trabajador
if($usuarioRol == 'Trabajador')
{
	//buscar idTrabajador para buscar sus solicitudes
	$trabajadores = new trabajador();
	$idTrabajador = $trabajadores->getTrabajadorPorIdUser($idUser);	
	//buscar idRol del trabajador
    if($idTrabajador){
 
		$idRol = $trabajadores->getTrabajadorRol($idTrabajador);

		//mostrar solicitudes

		$solicitudes = new solicitud();

		$solicitud = $solicitudes->muestraSolicitudesPendientes($idRol);
 
	}else{

		$msg="no tienes solicitudes";

	}
 
}
else if($usuarioRol == 'Cliente' || $usuarioRol == 'cliente'){

	//buscar idCliente para buscar sus solicitudes
	$clientes = new cliente();
	$cli = $clientes->getCliente($idUser);
	$idCliente = $cli->getId();
 if($idCliente){
	//ids lineas solicitudes
	$lineaSolicitudes = new lineasolicitud();
        
	//$lineasSolicitud = $lineaSolicitudes->muestraLineasSolicitudesCliente($idCliente);
	$idSolicitudes = $lineaSolicitudes->getIdSolicitudCliente($idCliente);

	//mostrar solicitudes devolverá array de arrays
	$solicitudes = new solicitud();
	$solicitud = $solicitudes->muestraSolicitudesCliente($idSolicitudes);
 }else{
         $msg="no tienes solicitudes";
 }
}
if ($_GET['act'] == 'mostrarSolicitudes') {
require_once 'view/solicitudes.php';
require_once 'view/footer.php';
}

ob_end_flush();
?>