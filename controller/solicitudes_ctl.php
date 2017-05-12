<?php

ob_start();

$titlePage = "Solicitudes pendientes de asignar";

require_once 'view/header.php';
$solicitudes = new solicitud();
$solicitud = $solicitudes->muestraSolicitudesPendientes();
var_dump($solicitud);

require_once 'view/solicitudes.php';
require_once 'view/footer.php';

ob_end_flush();
?>