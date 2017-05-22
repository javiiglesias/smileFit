<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Mostrar Mis Datos ";



$workers = new trabajador();


  
    if(isset($_SESSION["test2"])){
   $idUser= $_SESSION["test2"];
}else{
         $idUser= $_REQUEST['param'] ;
    }

$worker=$workers->getTrabajador($idUser);



require_once 'view/header.php';

require_once 'view/mostrarDatosTrabajador.php';
require_once 'view/footer.php';



ob_end_flush();
?>