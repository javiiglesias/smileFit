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
	//buscar idTrabajador para buscar sus eventos
	$trabajadores = new trabajador();
	$idTrabajador = $trabajadores->getTrabajadorPorIdUser($idUser);	
	//buscar idRol del trabajador
	$idRol = $trabajadores->getTrabajadorRol($idTrabajador);
	//mostrar lineas solicitud
	$solicitudes = new solicitud();
	$solicitud = $solicitudes->muestraSolicitudesPendientes($idRol);
}

require_once 'view/solicitudes.php';
require_once 'view/footer.php';

ob_end_flush();
?>