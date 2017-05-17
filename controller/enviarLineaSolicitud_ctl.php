<?php

ob_start();

$titlePage = "Lineas de Solicitud";

require_once 'view/header.php';


$usuarios = new usuario();
$idCurrent=$_REQUEST['param'];
$descripcion=$_REQUEST['linea_solicitud'];

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
	$trabajador = $trabajadores->getTrabajador($idUser);	

	//obtener titulo solicitud
	$solicitud = new solicitud();
	$tit = $solicitud->getTituloSolicitud($idSolicitud);

	$key = array_values($tit[0]); 
    $titulo = $key[0];

	//mostrar lineas solicitud
	$lineasSolicitudes = new lineasolicitud();
	$lineasSolicitud = $lineasSolicitudes->altaLineaSolicitud($idSolicitud,$idTrabajador,$descripcion);

}

else{
	//si es cliente
	//buscar idCliente para buscar sus solicitudes
	$clientes = new cliente();
	//$idCliente = $clientes->getClientePorIdUser($idUser);	
	$cliente = $clientes->getCliente($idUser);	

	//obtener titulo solicitud
	$solicitud = new solicitud();
	$tit = $solicitud->getTituloSolicitud($idSolicitud);

	$key = array_values($tit[0]); 
    $titulo = $key[0];

	//mostrar lineas solicitud
	$lineasSolicitudes = new lineasolicitud();
	$lineasSolicitud = $lineasSolicitudes->altaLineaSolicitud($idSolicitud,$idCliente,$descripcion);

}

require_once 'view/lineasSolicitud.php';
require_once 'view/footer.php';

ob_end_flush();
?>