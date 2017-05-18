<?php

ob_start();

$titlePage = "Lineas de Solicitud";

require_once 'view/header.php';

$idSolicitud=$_REQUEST['idSolicitud'];
$idEmisor=$_REQUEST['idEmisor'];
$descripcion=$_REQUEST['linea_solicitud'];

//var_dump($idSolicitud." ".$idEmisor." ".$descripcion);

$usuarios = new usuario();

if(isset($_SESSION["test2"])){
   $idUser= $_SESSION["test2"];
}

//obtenemos el usuario actual
$usuarioRol = $usuarios->getUserPorId($idUser);

//si es trabajador
if($usuarioRol == 'Trabajador')
{
	//mostrar lineas solicitud
	$lineasSolicitudes = new lineasolicitud();
	$lineasSolicitud = $lineasSolicitudes->altaLineaSolicitud($idSolicitud,$idEmisor,null,$descripcion);

}

else if($usuarioRol == 'Cliente' || $usuarioRol == 'cliente'){

	//mostrar lineas solicitud
	$lineasSolicitudes = new lineasolicitud();
	$lineasSolicitud = $lineasSolicitudes->altaLineaSolicitud($idSolicitud,null,$idEmisor,$descripcion);
	//var_dump($lineasSolicitud);
	$mensaje = "Tu mensaje se ha enviado correctamente";
    require_once 'view/confirmacion.php';
}

require_once 'view/lineasSolicitud.php';
require_once 'view/footer.php';

ob_end_flush();
?>