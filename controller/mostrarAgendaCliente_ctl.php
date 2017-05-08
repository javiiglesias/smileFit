<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = "Mi Agenda";


require_once 'view/header.php';

require_once 'view/mostrarAgendaCliente.php';
require_once'view/partials/header-calendar.php';

$eventos = new evento();
//$evento = $eventos->muestraEvento();




require_once 'view/footer.php';



ob_end_flush();
?>