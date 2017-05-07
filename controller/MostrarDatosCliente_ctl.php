<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Mostrar Mis Datos ";



$clientes = new cliente();

if(isset($_SESSION["test2"])){
   $rol2= $_SESSION["test2"];
   echo $rol2;
}

$cliente=$clientes->getCliente($rol2);



require_once 'view/header.php';
require_once 'view/mostrarDatosCliente.php';
require_once 'view/footer.php';



ob_end_flush();
?>