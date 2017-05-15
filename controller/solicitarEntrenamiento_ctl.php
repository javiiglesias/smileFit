<?php

ob_start();

$titlePage = "Solicitar Entrenamiento";

require_once 'view/header.php';

$usuarios = new usuario();

if(isset($_SESSION["test2"])){
   $idUser= $_SESSION["test2"];
}

//obtenemos el usuario actual
$usuarioRol = $usuarios->getUserPorId($idUser);

//si es cliente
if($usuarioRol == 'Cliente' || $usuarioRol == 'cliente')
{
	require_once 'view/solicitarEntrenamiento.php';
}
else{
	require_once 'view/404.php';
}
require_once 'view/footer.php';

ob_end_flush();
?>