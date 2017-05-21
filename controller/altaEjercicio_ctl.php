<?php $titlePage = "Alta Ejercicio";

require_once 'view/header.php';
require_once("controller/function_AutoLoad.php");

$idEntrenamiento=$_REQUEST['idEntrenamiento'];
$descripcion=$_REQUEST['descripcion'];
$series=$_REQUEST['series'];
$duracion=$_REQUEST['duracion'];
$descanso=$_REQUEST['descanso'];



$mensaje = "Tu solicitud se ha creado correctamente!";
require_once 'view/confirmacion.php';


//require_once 'view/altaEjercicio.php';
require_once 'view/footer.php';
ob_end_flush();
?>