<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Mostrar Mis Datos ";



$workers = new trabajador();

//Servirá para mostrar un unico trabajador
//if(isset($_SESSION["test2"])){
//   $rol2= $_SESSION["test2"];
//}

$worker=$workers->getTrabajadorPorIdUser();

require_once 'view/header.php';
require_once 'view/mostrarDatosTrabajador.php';
require_once 'view/footer.php';



ob_end_flush();
?>