<?php

ob_start();

$titlePage = "Lineas de Solicitud";

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
	//buscar idTrabajador para buscar sus eventos
	$trabajadores = new trabajador();
	$idTrabajador = $trabajadores->getTrabajadorPorIdUser($idUser);	
	$trabajador = $trabajadores->getTrabajador($idUser);	

	//mostrar lineas solicitud
	$lineasSolicitudes = new lineasolicitud();
	$lineasSolicitud = $lineasSolicitudes->muestraLineasPorIdSolicitud($idTrabajador);

	//$nombreTrabajador=$idTrabajador->getNombre();
	//var_dump($trabajador->getNombre());
}

require_once 'view/lineasSolicitud.php';
require_once 'view/footer.php';

ob_end_flush();
?>