<?php

ob_start();

$titlePage = "Solicitudes en Curso";

require_once 'view/header.php';

$usuarios = new usuario();
$solicitudes = new solicitud();

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

	//buscar idRol del trabajador para saber si es entrenador o dietista
   	$idRol = $trabajadores->getTrabajadorRol($idTrabajador);

   	if($idRol == 1){
		//mostrar entrenamientos
		$entrenamientos = new entrenamiento();
		$gen = $entrenamientos->getEntrenamientosTrabajador($idTrabajador);	
	}
	else{
		//mostrar dietas
		$dietas = new dieta();
		$gen = $dietas->getDietasTrabajador($idTrabajador);	
	}

	$clientes = new cliente();
}
else if($usuarioRol == 'Cliente' || $usuarioRol == 'cliente'){

	//buscar idCliente para buscar sus solicitudes
	$clientes = new cliente();
	$cli = $clientes->getCliente($idUser);
	$idCliente = $cli->getId();

	//mostrar entrenamientos
	$entrenamientos = new entrenamiento();
	$entrenamiento = $entrenamientos->getEntrenamientosCliente($idCliente);	

	//mostrar dietas
	$dietas = new dieta();
	$dieta = $dietas->getDietasCliente($idCliente);

	$trabajadores = new trabajador();

}
if ($_GET['act'] == 'mostrarSolicitudesAsignadas') {
require_once 'view/mostrarSolicitudesAsignadas.php';
require_once 'view/footer.php';
}

ob_end_flush();
?>