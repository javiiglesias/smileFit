<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = "Mi Agenda";

require_once 'view/header.php';
require_once 'view/mostrarAgenda.php';
require_once 'view/partials/header-calendar.php';

$eventos = new evento();
$usuarios = new usuario();

if(isset($_SESSION["test2"])){
   $idUser= $_SESSION["test2"];
}
//echo "user: $user";

//obtenemos el usuario actual
$usuarioRol = $usuarios->getUserPorId($idUser);
//echo "usuario: $usuarioRol ";

//si es trabajador
if($usuarioRol == 'Trabajador')
{
	//echo " (es trabajador)<br>";
	//buscar idTrabajador para buscar sus eventos
	$trabajadores = new trabajador();
	$idTrabajador = $trabajadores->getTrabajadorPorIdUser($idUser);	
	//obtener eventos por el idTrabajador
	$eventos = new evento();
	$evento = $eventos->getEventosPorTrabajador($idTrabajador);
	//mostrar eventos
	//$eventosTrabajador = $eventos->muestraEvento($evento);
	echo json_encode(
		array(
			'success' => 1, 
			'result' => $evento)
	);
}
//si es cliente
else{
	echo "(es cliente)";
	//buscar idCliente para buscar sus eventos
	// $clientes = new cliente();
	// $idCliente = $clientes->getClientePorIdUser($idUser);
	// var_dump($idCliente);

	// $eventos = new evento();
	// $evento = $eventos->getEventosPorCliente($idCliente);
	// var_dump($evento);
}



require_once 'view/footer.php';
ob_end_flush();
?>