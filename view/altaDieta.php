<?php

?>
<div class="container">
<span>Periodo de dieta desde <?php echo $fechaInicio ?> hasta <?php echo $fechaFin ?><br> Totales de la dieta <?php echo $diferencia_dias ?></span>  
<?php for ($index = 0; $index < $diferencia_dias; $index++) { ?>
    <br><label class="w100px">Tipo Comida</label>
    <?php for ($index1 = 0; $index1 < count($tipoComida); $index1++) { ?>
    <input type="text" class="w100px" readonly value="<?php echo implode($tipoComida[$index1]) ?>">
   
    <?php } ?>
    <br><label class="w100px">Producto</label>
     <?php for ($index1 = 0; $index1 < count($tipoComida); $index1++) { ?>
    <input type="text" class="w100px" readonly value="yogurt">
     <?php }?>
<?php } ?>


</div>

