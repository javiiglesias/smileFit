<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Listado trabajadores ";



$customer = new cliente();

//Servirá para mostrar un unico trabajador
//if(isset($_SESSION["test2"])){
//   $rol2= $_SESSION["test2"];
//}

require_once ('view/header.php');
$customers=$customer->getCustomers();

if($_GET['ctl']!="menu" && $_GET['act']!="admin" ){
	
    require_once ('view/partials/trabajadores.php');
    require_once ('view/footer.php');
}


ob_end_flush();
?>