<?php

ob_start();

$titlePage = "Solicitud";

require_once 'view/header.php';

$solicitud= new solicitud();
$lineaSolicitud = new lineasolicitud();
$clientes = new cliente();

$hoy = date('Y/m/d');
$enviado = false;
$usuarios = new usuario();

if(isset($_SESSION["test2"])){
   $idUser= $_SESSION["test2"];
}

if (isset($_REQUEST['solicitar'])){
	$titulo = $_REQUEST['titulo'];
    $descripcion = $_REQUEST['descripcion'];
    $fecha= $hoy;
    $rol=$_REQUEST['rol'];

    //consulta para sacar el id ultimo de solicitud
    $solic = $solicitud->ObtenerUltimoIdSolicitud();

    $key = array_values($solic[0]); 
    $idSolicitud = $key[0];
    //idSolicitud+1 y le pasamos el Id
    $idSolicitud++;    
    $titulo = $titulo.' '.$idSolicitud;
    $sol = $solicitud->altaSolicitud($idSolicitud,$titulo,$descripcion,$fecha,$rol);

    //buscar idCliente para buscar sus solicitudes
	$idCliente = $clientes->getClientePorIdUser($idUser);
    //alta Linea Solicitud
    $lin = $lineaSolicitud->altaLineaSolicitud($idSolicitud,$idTrabajador=null,$idCliente,$descripcion);

    if($sol != null && $lin != null){
    	$enviado = true;
        //echo $enviado;    	
    }
    else{
    	$enviado = false;
        //echo $enviado;
    }

    if($enviado == true){
    	$mensaje = "Tu solicitud se ha enviado correctamente, en breves recibiras respuesta";
    	require_once 'view/confirmacion.php';
	}
    require_once 'view/entrenamientos.php';
    
}else{
    // require_once 'view/altaSolicitud.php';
}

require_once 'view/footer.php';

ob_end_flush();
?>


