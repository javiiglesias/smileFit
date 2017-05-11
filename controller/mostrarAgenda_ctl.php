<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = "Mi Agenda";

require_once 'view/header.php';
require_once 'view/mostrarAgenda.php';
require_once 'view/partials/header-calendar.php';

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
	//obtener eventos por el idTrabajador
	$eventos = new evento();
	$eventosObtenidos = $eventos->getEventosPorTrabajador($idTrabajador);
	//mostrar eventos

	//$eventoObtenidos = $eventos->muestraEventos($evento);
	//echo $eventoObtenidos;
	//var_dump($eventosObtenidos);
	// $a = json_encode(
 //                 array(
 //                 'success' => 1, 
 //                 'result' => $eventosObtenidos)
 //             ); 
	// var_dump($a);
	// return $a;
}
//si es cliente
else{
	//echo "(es cliente)";
	//buscar idCliente para buscar sus eventos
	//$clientes = new cliente();
	//$idCliente = $clientes->getClientePorIdUser($idUser);
	//var_dump($idCliente);

	// $eventos = new evento();
	// $evento = $eventos->getEventosPorCliente($idCliente);
	// var_dump($evento);

	//this.muestraEventos($evento);
}

// public function muestraEventos($eventos){

// 	echo json_encode(
// 		array(
// 			'success' => 1, 
// 			'result' => $eventos)
// 	);
// }

require_once 'view/footer.php';
ob_end_flush();
?>