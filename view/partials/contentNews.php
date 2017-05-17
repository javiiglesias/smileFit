<?require_once("controller/noticias_ctl.php");?>
<?php foreach ($noticia as $noticias): ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0">
		
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pLR0noxs mB15">
			<img class="img-responsive" src="view/images/<?php echo $noticias->getImagen();?>"/>	
		</div>
				
		<div class="col-xs-12 col-md-8 col-sm-6 col-lg-8pB35 h226 mB15">
			<a href="?ctl=noticias&act=detalle&param=<?php echo $noticias->getId();?>" >
				<h1> <?php echo $noticias->getTitulo();?></h1><br>
			</a>
			<span class="lite fz13"><?php echo $noticias->getDescripcion();?></span><br>
			<a href="?ctl=noticias&act=detalle&param=<?php echo $noticias->getId();?>">
				<span class="pT20 bold colorRed dInlineB fz13">Leer más</span>
			</a>
		</div>
	</div>
	<!--echo $noticias->getContenido();-->			

	<?php endforeach ?>
	 