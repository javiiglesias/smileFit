<?php

ob_start();

$titlePage = "Solicitudes pendientes de asignar";

require_once 'view/header.php';

$usuarios = new usuario();

$nSolicitud=$_REQUEST['param'];

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
	$idRol = $trabajadores->getTrabajadorRol($idTrabajador);
	//mostrar solicitudes
	$solicitudes = new solicitud();
	$solicitud = $solicitudes->muestraSolicitudesPendientes($idRol,$nSolicitud);
}
else if($usuarioRol == 'Cliente' || $usuarioRol == 'cliente'){

	//buscar idCliente para buscar sus solicitudes
	$clientes = new cliente();
	$idCliente = $clientes->getCliente($idUser);	

	//mostrar lineas solicitudes
	$lineaSolicitudes = new lineasolicitud();
	$solicitud = $lineaSolicitudes->muestraLineasSolicitudesCliente($idCliente);

	//mostrar solicitudes
	$solicitudes = new solicitud();
	$solicitud = $solicitudes->muestraSolicitudesCliente($idRol);
}

require_once 'view/solicitudes.php';
require_once 'view/footer.php';

ob_end_flush();
?>