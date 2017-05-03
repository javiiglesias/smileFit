<?php
require_once("controller/function_AutoLoad.php");
$titlePage = " Noticia ";

require_once 'view/header.php';
if(isset($_REQUEST['param'])){

//buscar noticia
	$nNoticia=$_REQUEST['param'];
	$noticias = new noticia();


    $noticia = $noticias->muestraNoticia($nNoticia);
    if(count($noticia)<1){
    		$titlePage="La página no se ha encontrado";
	require_once 'view/404.php';
    }
}else{
	$titlePage="La página no se ha encontrado";
	require_once 'view/404.php';
}


require_once 'view/noticiaDetalle.php';

require_once 'view/footer.php';
ob_end_flush();
?>
?>