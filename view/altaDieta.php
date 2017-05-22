<?php

?>

<div class="container">
      <a href="javascript:history.back(1)" class="btn btn-default fixed">Volver Atrás</a>
	<span>Periodo de dieta desde <?php echo $fInicio ?> hasta <?php echo $fFin ?><br> Total días de dieta: <?php echo $diferencia_dias ?></span>  
    <form  name="form" id="form" method="POST" action="?ctl=trabajador&act=enviarDieta&param=<?php echo $idCliente;?>">
	   <input type="hidden" name="diferenciaDias" value="<?php echo $diferencia_dias?>">
        <input type="hidden" name="tipoComidaCantidad" value="<?php echo  count($tipoComida)?>">
        
        <?php for ($index = 0; $index < $diferencia_dias; $index++) { ?>
		<h3>Día <?php echo $index+1; ?></h3>
		
	    <br><label class="w100px">Tipo Comida</label>
	    <?php for ($index1 = 0; $index1 < count($tipoComida); $index1++) { ?>
	    <input type="text" name="tipoComida<?php echo $index1?>" class="w100px" readonly value="<?php echo implode($tipoComida[$index1]) ?>">
	   
	    <?php } ?>
	    <br><label class="w100px">Producto</label>
	     <?php for ($index1 = 0; $index1 < count($tipoComida); $index1++) { ?>
	    <!-- <input type="text" class="w100px" readonly value="yogurt"> -->
	    <select name="producto" class="w100px">
		    <?php foreach($productos as $row) {
			  echo '<option name="producto'.$index,'." value="'.$row['Descripcion'].'">'.$row['Descripcion'].'<option/>';
			} ?>
		</select> 
	     <?php }

	} ?>

	<input type="submit" name="enviar" id="button" class="btn btn-success mT20" value="Enviar Dieta"/>
    </form>
</div>



