<?php
$titlePage = "Inicio";

require_once 'view/header.php';
require_once("controller/function_AutoLoad.php");

	$noticias = new noticia();


    $noticia = $noticias->muestraNoticia();



require_once 'view/inicio.php';
require_once 'view/footer.php';
ob_end_flush();
?>