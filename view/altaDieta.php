<?php

?>
<div class="container">
	<span>Periodo de dieta desde <?php echo $fInicio ?> hasta <?php echo $fFin ?><br> Total días de dieta: <?php echo $diferencia_dias ?></span>  
	<?php for ($index = 0; $index < $diferencia_dias; $index++) { ?>
		<h3>Día <?php echo $index+1; ?></h3>
		<?php var_dump($productos); ?>
	    <br><label class="w100px">Tipo Comida</label>
	    <?php for ($index1 = 0; $index1 < count($tipoComida); $index1++) { ?>
	    <input type="text" class="w100px" readonly value="<?php echo implode($tipoComida[$index1]) ?>">
	   
	    <?php } ?>
	    <br><label class="w100px">Producto</label>
	     <?php for ($index1 = 0; $index1 < count($tipoComida); $index1++) { ?>
	    <!-- <input type="text" class="w100px" readonly value="yogurt"> -->
	    <select class="w100px">
		    <?php foreach($productos as $row) {
			  echo '<option value="'.$row['Id'].'">'.$row['Descripcion'].'<option/>';
			} ?>
		</select> 
	     <?php }

	} ?>

	<input type="button" id="button" class="btn btn-success mT20" value="Enviar Dieta"/>

</div>

