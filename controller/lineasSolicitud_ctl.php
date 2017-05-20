<?php

ob_start();

$titlePage = "Lineas de Solicitud";

require_once 'view/header.php';

$usuarios = new usuario();


$idSolicitud = $_REQUEST['param'];


$asignado = false;

if (isset($_SESSION["test2"])) {
    $idUser = $_SESSION["test2"];
}

//obtenemos el usuario actual
$usuarioRol = $usuarios->getUserPorId($idUser);

//si es trabajador

if ($usuarioRol == 'Trabajador') {
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
} else if ($usuarioRol == 'Cliente' || $usuarioRol == 'cliente') {
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
	
}

  $idClienteSolicitador = $lineasSolicitud[0]->getIdCliente();

if ($_GET['act'] == 'mostrarLineasSolicitud') {
    require_once 'view/lineasSolicitud.php';
    require_once 'view/footer.php';
}

ob_end_flush();
?>