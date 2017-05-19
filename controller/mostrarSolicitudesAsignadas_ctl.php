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
	//mostrar entrenamientos
	$entrenamientos = new entrenamiento();
	$entrenamiento = $entrenamientos->getEntrenamientosTrabajador($idTrabajador);	
	//var_dump($entrenamiento);
}
else if($usuarioRol == 'Cliente' || $usuarioRol == 'cliente'){

	//buscar idCliente para buscar sus solicitudes
	$clientes = new cliente();
	$cli = $clientes->getCliente($idUser);
	$idCliente = $cli->getId();


}

require_once 'view/mostrarSolicitudesAsignadas.php';
require_once 'view/footer.php';

ob_end_flush();
?>