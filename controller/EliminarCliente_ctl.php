<?php

require_once("controller/function_AutoLoad.php");
$cliente= new cliente();


if (isset($_REQUEST['eliminar'])){
    $id= $_REQUEST['param'];
    $cliente->eliminarCliente($id);
    header('Location: index.php?ctl=cliente&act=MostrarDatos');
}
