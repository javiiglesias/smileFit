<?php
require_once("controller/function_AutoLoad.php");
$titlePage = "Noticias";

require_once 'view/header.php';


$noticias = new noticia();


    $noticia = $noticias->muestraNoticias();



require_once 'view/footer.php';
ob_end_flush();
?>
?>