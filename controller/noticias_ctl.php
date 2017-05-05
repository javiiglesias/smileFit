<?php
require_once("controller/function_AutoLoad.php");
$titlePage = "Noticias";

require_once 'view/header.php';


	$noticias = new noticia();


    $noticia = $noticias->muestraNoticia();




include('view/noticias.php');

require_once 'view/footer.php';
ob_end_flush();
?>
