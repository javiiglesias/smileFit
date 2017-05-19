<?php

ob_start();

$titlePage = "Lineas de Solicitud";

require_once 'view/header.php';


$usuarios = new usuario();


$idSolicitud=$_REQUEST['param'];
$enviado  = false;
$asignado = false;

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
	$lineasSolicitud = $lineasSolicitudes->muestraLineasPorIdSolicitud($idSolicitud);

	$enviado = true;


}
else if($usuarioRol == 'Cliente' || $usuarioRol == 'cliente'){
	//si es cliente
	//buscar idCliente para buscar sus solicitudes
	$clientes = new cliente();
	$idCliente = $clientes->getClientePorIdUser($idUser);	
	$cliente = $clientes->getCliente($idUser);	

	//obtener titulo solicitud
	$solicitud = new solicitud();
	$tit = $solicitud->getTituloSolicitud($idSolicitud);

	$key = array_values($tit[0]); 
    $titulo = $key[0];

	//mostrar lineas solicitud
	$lineasSolicitudes = new lineasolicitud();
	$lineasSolicitud = $lineasSolicitudes->muestraLineasPorIdSolicitud($idSolicitud);

	$enviado = true;

	//var_dump($lineasSolicitud);
	// foreach ($lineasSolicitud as $row) {
	// 	if($row[2]!= null)
	// 		var_dump($row[2]);
	// }
	
}

//$idClienteSolicitador = $lineasSolicitud[0]->getIdCliente();
//var_dump($idClienteSolicitador);

$trabajadores = new trabajador();
$tr = $trabajadores->getTrabajadores();
//var_dump($tr);

$clientes = new cliente();
$cl = $clientes->getCustomers();
//var_dump($cl);

require_once 'view/lineasSolicitud.php';
if($enviado == false){
	require_once 'view/footer.php';
}

ob_end_flush();
?>