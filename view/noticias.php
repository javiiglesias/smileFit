
<div class="container pRelative " id="main">
		
	
	<?php foreach ($noticia as $noticias): ?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mT50nXS borderGris pL0">
	
		<div class="col-xs-12 col-sm-6"><h1> <?echo $noticias->getTitulo()?>;</h1>
		<img  class="img-responsive" src="view/images/<?echo $noticias->getImagen();?>"></div>
		<div class="col-xs-12 col-sm-6"><span ><? echo $noticias->getDescripcion();?></span></div>
		<!--echo $noticias->getContenido();-->
		
		</div>
	 <?endforeach ?>
	  
	</div>
</div>
