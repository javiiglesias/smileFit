
<div class="container pRelative " id="main">
		
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0">
	<?php foreach ($noticia as $noticias): ?>
		<div class="text-center ">
		<h1> <?echo $noticias->getTitulo()?></h1>
		</div>
		<div class="col-xs-12 col-sm-4 text-center">
		<img  class="img-responsive " src='view/images/<?echo $noticias->getImagen();?>'></div>
		<div class="col-xs-12 col-sm-8"><span ><? echo $noticias->getContenido();?></span></div>

	 <?endforeach ?>
	  
	</div>
</div>
