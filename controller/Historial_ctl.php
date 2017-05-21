<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Mi Historial ";

$clientes = new cliente();
$entrenamiento = new entrenamiento();
$dieta = new dieta();

if(isset($_SESSION["test2"])){
    $rol2= $_SESSION["test2"];
}
$cliente=$clientes->getCliente($rol2);

$test=$cliente->getId();
$entreno=$entrenamiento->getEntrenamientosCliente($test);
$dietas = $dieta->getDietasCliente($test);



require_once 'view/header.php';
require_once 'view/MostrarHistorial.php';
require_once 'view/footer.php';



ob_end_flush();
?>