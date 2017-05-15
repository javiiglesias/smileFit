<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Mostrar Mis Datos ";



$workers = new trabajador();

if(isset($_SESSION["test2"])){
   $rol2= $_SESSION["test2"];
}

$workers=$workers->getTrabajador($rol2);



require_once 'view/header.php';
require_once 'view/mostrarDatosCliente.php';
require_once 'view/footer.php';



ob_end_flush();
?>