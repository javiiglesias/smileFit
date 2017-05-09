<?php
require_once("controller/function_AutoLoad.php");
//require_once 'view/header.php';
$cliente= new cliente();


if (isset($_REQUEST['modificar'])){
    $id= $_REQUEST['id'];
    $nombre = $_REQUEST['name'];
    $apellidos=$_REQUEST['lastname'];
    $edad=$_REQUEST['age'];
    $email=$_REQUEST['email'];
    $telefono=$_REQUEST['telefono'];
    $foto="";
    $cliente->setCliente($id,$nombre,$apellidos,$edad,$email,$telefono,$foto);
    header('Location: index.php?ctl=cliente&act=MostrarDatos');
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