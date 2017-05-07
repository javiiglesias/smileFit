<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Mostrar Mis Datos ";



$clientes = new cliente();

if(isset($_SESSION["test2"])){
   $rol2= $_SESSION["test2"];
}

$clientes->getCliente($rol2);



require_once 'view/header.php';
require_once 'view/mostrarDatosCliente.php';




ob_end_flush();
?>