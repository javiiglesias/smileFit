<?php

require_once("controller/function_AutoLoad.php");
$trabajador= new trabajador();

$titlePage="";
if (isset($_REQUEST['eliminar'])){
    $id= $_REQUEST['param'];
    $trab=$trabajador->getTrabajador($id);
    $nombre=$trab->getNombre();
    $trabajador->eliminarTrabajador($id);
    //var_dump($trabajador);
     require_once 'view/header.php';
         $mensaje = "El trabajador".$nombre." ha sido  eliminado correctamente";
        require_once 'view/confirmacion.php';
         require_once 'view/footer.php';
}