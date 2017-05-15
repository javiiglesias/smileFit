<?php

ob_start();

$titlePage = "Solicitud";

require_once 'view/header.php';

$solicitud= new solicitud();
$lineaSolicitud = new lineasolicitud();
$clientes = new cliente();

$hoy = date('Y/m/d');

$usuarios = new usuario();

if(isset($_SESSION["test2"])){
   $idUser= $_SESSION["test2"];
}

if (isset($_REQUEST['solicitar'])){
	$titulo = $_REQUEST['titulo'];
    $descripcion = $_REQUEST['descripcion'];
    $fecha= $hoy;
    $rol=$_REQUEST['rol'];
    $sol = $solicitud->altaSolicitud($titulo,$descripcion,$fecha,$rol);

    //buscar idSolicitud creada
    $idSolicitud = $sol->getId();
    //var_dump($idSolicitud);
    //buscar idCliente para buscar sus solicitudes
	$idCliente = $clientes->getCliente($idUser);
	//var_dump($idCliente);
    $lineaSolicitud->altaLineaSolicitud($idSolicitud,$idTrabajador=null,$idCliente,$descripcion);

    $mensaje = "Tu solicitud se ha enviado correctamente, en breves recibiras respuesta";
    require_once 'view/confirmacion.php';
    
}else{
    // require_once 'view/altaSolicitud.php';
}

require_once 'view/footer.php';

ob_end_flush();
?>


