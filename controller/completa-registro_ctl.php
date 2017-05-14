<?php
require_once("controller/function_AutoLoad.php");
$titlePage = "Registrar Trabajador";
$trabajador= new trabajador();

require_once 'view/header.php';



if (isset($_REQUEST['Submit'])) {
    $worker= $trabajador->addWorker($_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['fechaNacimiento'],$_REQUEST['email'],$_REQUEST['telefono'],$_REQUEST['foto'],$_REQUEST['rol'],$_REQUEST['idUser']);
        $mensaje = "Te has registrado correctamente, Puedes iniciar Session";
        require_once 'view/confirmacion.php';
    }else{

}


	

?>