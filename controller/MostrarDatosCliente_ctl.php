<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Mostrar Mis Datos ";



$clientes = new cliente();

if(isset($_SESSION["test2"])){
   $rol2= $_SESSION["test2"];
   echo $rol2;
}

$client=$clientes->getCliente($rol2);

var_dump($client);

require_once 'view/header.php';
require_once 'view/mostrarDatosCliente.php';




ob_end_flush();
?>