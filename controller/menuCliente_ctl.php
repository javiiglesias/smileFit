<?php
ob_start();
if( $_SESSION["usuario"]){
	$user=  $_SESSION["usuario"];
$titlePage = "Dashboard de ".$user;

require_once 'view/header.php';
require_once 'view/menuCliente.php';
require_once 'view/footer.php';
}else{
	header('location:view/inicio.php');
}


ob_end_flush();
?>