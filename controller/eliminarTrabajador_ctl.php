<?php

require_once("controller/function_AutoLoad.php");
$trabajador= new trabajador();


if (isset($_REQUEST['eliminar'])){
    $id= $_REQUEST['param'];
    $trabajador->eliminarTrabajador($id);
    header('Location: index.php?ctl=trabajador&act=MostrarDatos');
}