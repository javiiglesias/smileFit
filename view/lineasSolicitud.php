<?require_once("controller/lineasSolicitud_ctl.php");?>
<div class="container">
	<?var_dump($lineasSolicitud);?>

<?php foreach ($lineasSolicitud as $lineasSolicitudes): ?>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 borderGris pL0">
		<h5><?php echo $lineasSolicitudes->getIdTrabajador();?></h5>
	</div>
	<div class="col-xs-12 col-md-9 col-sm-6 col-lg-8pB35 h115 mB15">
		<span><?php echo $lineasSolicitudes->getDescripcion();?></span>
	</div>
<?php endforeach ?>
 	<div class="col-xs-12 col-sm-12">
		<input type="text" name="linea_solicitud" placeholder="Enviar mensaje" class="form-control">
	</div>
</div>