<?php

ob_start();

$titlePage = "Solicitud";

require_once 'view/header.php';

$solicitud= new solicitud();

if (isset($_REQUEST['solicitar'])){
    $descripcion = $_REQUEST['descripcion'];
    $fechaInicio=$_REQUEST['fecha'];
    $rol=$_REQUEST['rol'];
    $solicitud->altaSolicitud($descripcion,$fechaInicio,$rol);

    
    header('Location: index.php?ctl=entrenamientos');
    $mensaje = "Tu solicitud se ha enviado correctamente, en breves recibiras respuesta";
    require_once 'view/confirmacion.php';

    //añadir linea solicitud
    require_once 'view/altaLineaSolicitud.php';
    
}else{
    require_once 'view/altaSolicitud.php';
}

require_once 'view/footer.php';

ob_end_flush();
?>


