<?php

ob_start();

$titlePage = "Solicitudes en Curso";

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

	//buscar idRol del trabajador para saber si es entrenador o dietista
   	$idRol = $trabajadores->getTrabajadorRol($idTrabajador);

   	if($idRol == 1){
		//mostrar entrenamientos
		$entrenamientos = new entrenamiento();
		$entrenamiento = $entrenamientos->getEntrenamientosTrabajador($idTrabajador);	
		//var_dump($entrenamiento);
	}
	else{
		//mostrar dietas
		$dietas = new dieta();
		$dieta = $dietas->getDietasTrabajador($idTrabajador);	
		//var_dump($entrenamiento);
	}

	//nombre cliente
	// $clientes = new cliente();
	// $cli = $clientes->getClientePorUserId($idUser);
	// $idCliente = $cli->getId();

	//$client = $clientes->getClientePorId($idCliente);
	//var_dump($client);
	// $nombreCliente = $cli->getNombre();
	// var_dump($nombreCliente);
	// $apellidosCliente = $cli->getApellidos();
	// var_dump($apellidosCliente);

	//nombre trabajador
	// $trabajadores = new trabajador();
	// $tra = $trabajadores->getTrabajadorPorIdUser($idUser);
	// $nombreTrabajador = $tra->getNombre();
	// $apellidosTrabajador = $tra->getApellidos();
}
else if($usuarioRol == 'Cliente' || $usuarioRol == 'cliente'){

	//buscar idCliente para buscar sus solicitudes
	$clientes = new cliente();
	$cli = $clientes->getCliente($idUser);
	$idCliente = $cli->getId();

	//var_dump($idCliente);

	//mostrar entrenamientos
	$entrenamientos = new entrenamiento();
	$entrenamiento = $entrenamientos->getEntrenamientosCliente($idCliente);	

	//mostrar dietas
	$dietas = new dieta();
	$dieta = $dietas->getDietasCliente($idCliente);

}

require_once 'view/mostrarSolicitudesAsignadas.php';
require_once 'view/footer.php';

ob_end_flush();
?>