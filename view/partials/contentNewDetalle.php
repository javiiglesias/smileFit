<?require_once("controller/noticiasDetalle_ctl.php");?>
<?php foreach ($noticia as $noticias): ?>
		<div class="text-center ">
			<h1> <?echo $noticias->getTitulo()?></h1>
		</div>
		<div class="col-xs-12 col-sm-4 text-center">
		<img  class="img-responsive " src='view/images/<?echo $noticias->getImagen();?>'></div>
		<div class="col-xs-12 col-sm-8"><span ><? echo $noticias->getContenido();?></span></div>

	 <?php endforeach ?>