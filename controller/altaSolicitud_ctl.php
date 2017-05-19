<?php

ob_start();

$titlePage = "Asignar Solicitud";

require_once 'view/header.php';

$idSolicitud=$_REQUEST['idSolicitud'];
$idTrabajador=$_REQUEST['idTrabajador'];
$idCliente=$_REQUEST['idCliente'];

// var_dump($idSolicitud." ".$idTrabajador." ".$idCliente);
// die();

require_once 'view/altaSolicitud.php';
require_once 'view/footer.php';

ob_end_flush();
?>