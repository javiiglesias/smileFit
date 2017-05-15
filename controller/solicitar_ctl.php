<?php

ob_start();

$titlePage = "Solicitud";

require_once 'view/header.php';

$solicitud= new solicitud();
$lineaSolicitud = new lineasolicitud();
$hoy = date('Y/m/d');

if (isset($_REQUEST['solicitar'])){
    $descripcion = $_REQUEST['descripcion'];
    $fecha= $hoy;
    $rol=$_REQUEST['rol'];
    $solicitud->altaSolicitud($descripcion,$fecha,$rol);



    $mensaje = "Tu solicitud se ha enviado correctamente, en breves recibiras respuesta";
    require_once 'view/confirmacion.php';
    
}else{
    // require_once 'view/altaSolicitud.php';
}

require_once 'view/footer.php';

ob_end_flush();
?>


