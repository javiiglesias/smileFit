<?php
require_once("controller/function_AutoLoad.php");
//require_once 'view/header.php';
$worker= new trabajador();


if (isset($_REQUEST['modificar'])){
    $id= $_REQUEST['param'];
    $nombre = $_REQUEST['name'];
    $apellidos=$_REQUEST['lastname'];
    $fechaNacimiento=$_REQUEST['fechaNacimiento'];
    $email=$_REQUEST['email'];
    $telefono=$_REQUEST['telefono'];
    $foto=$_REQUEST['foto'];
    $worker->setTrabajador($id,$nombre,$apellidos,$fechaNacimiento,$email,$telefono,$foto);
    
    header('Location: index.php?ctl=admin&act=MostrarDatos&param='.$id);
}




//
//if (isset($_REQUEST['act'])) {
//if (isset($_REQUEST['submit'])) {
//if ($_REQUEST['act'] == 'modificar' && isset($_REQUEST['id'])) {
//$director = $agencia->searchDirectorById($_REQUEST['id']);
//}
//
//$director->__SET('name', $_REQUEST['name']);
//$director->__SET('lastname', $_REQUEST['lastname']);
//$director->__SET('nif', $_REQUEST['nif']);
//$director->__SET('photoUrlDirector', $_REQUEST['photoUrlDirector']);



?>