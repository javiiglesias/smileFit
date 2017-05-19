<?require_once("controller/noticiasDetalle_ctl.php");?>
<?php foreach ($noticia as $noticias): ?>
		<div class="text-center ">
			<h1> <?php echo $noticias->getTitulo()?></h1>
		</div>
		<div class="col-xs-12 col-sm-4 text-center">
		<img  class="img-responsive " src='view/images/<?php echo $noticias->getImagen();?>'></div>
		<div class="col-xs-12 col-sm-8"><span ><?php echo $noticias->getContenido();?></span></div>

	 <?php endforeach ?>