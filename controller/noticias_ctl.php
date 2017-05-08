<?php
require_once("controller/function_AutoLoad.php");
$titlePage = "Noticias";

require_once 'view/header.php';
	$noticias = new noticia();
    $noticia = $noticias->muestraNoticia();

/*Como las noticias se ven en diferentes secciones diferenciamos de cuando debe cargar la vista entera de noticias o cuando tan solo el trozo de las noticias
	si segun url estamos en el admin y su página inicial tan solo se mostrará el contenido de las noticias
	en caso opuesto se mostraá la vista de las noticias entera puesto que el controlador carga la clase noticia, debemos cargar este ctl en las dos vistas
*/
if($_GET['ctl']=="menu" && $_GET['act']=="admin" || $_GET['ctl']=="menu" && $_GET['act']=="cliente" ){

	require_once('view/partials/contentNews.php');
}else{

	include('view/noticias.php');

	require_once 'view/footer.php';
}
ob_end_flush();
?>
