<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Mis Clientes ";

$trabajador = new trabajador();

$clientes = new cliente();
$entrenamiento = new entrenamiento();
$dieta = new dieta();

if(isset($_SESSION["test2"])){
    $rol2= $_SESSION["test2"];
}

$test=$trabajador->getTrabajadorPorTablaUsuario($rol2);



$entreno=$entrenamiento->getEntrenamientosTrabajador($test);




$dietas = $dieta->getDietasTrabajador($test);





require_once 'view/header.php';
require_once 'view/MostrarMisClientes.php';
require_once 'view/footer.php';



ob_end_flush();