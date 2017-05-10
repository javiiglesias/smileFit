<?
require_once("controller/function_AutoLoad.php");

$trabajador= new trabajador();

$worker= $trabajador->addWorker($nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto);
echo"hola";
die();

?>