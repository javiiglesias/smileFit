<?php
ob_start();
require_once("controller/function_AutoLoad.php");
$titlePage = " Mostrar Mi FICHA Medica ";

$clientes = new cliente();
$fichaMedica = new FichaMedica();

if(isset($_SESSION["test2"])){
    $rol2= $_SESSION["test2"];
}

$cliente=$clientes->getCliente($rol2);




$test=$cliente->getId();

$ficha=$fichaMedica->getFichaMedica($test);



require_once 'view/header.php';
require_once 'view/MostrarFichaMedica.php';
require_once 'view/footer.php';



ob_end_flush();
?>