<?require_once("controller/mostrarDatosTrabajador_ctl.php");?>
<?php foreach ($worker as $workers): ?>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0">
		
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pLR0noxs mB15">
			<img class="img-responsive" src="view/images/<?echo $workers->getFoto();?>"/>	
		</div>
				
		<div class="col-xs-12 col-md-8 col-sm-6 col-lg-8pB35 h226 mB15">
			<a href="?ctl=workers&act=detalle&param=<?php echo $workers->getId();?>" >
				<h1> <?=$workers->getNombre()." ".$workers->getApellidos(); ?></h1><br>
			</a>
			<span class="lite fz13"><? echo $nombreRol; ?></span><br>
		</div>
	</div>		

	<?php endforeach ?>
	 