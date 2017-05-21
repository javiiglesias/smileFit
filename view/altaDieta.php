<?php
var_dump($diferencia_dias);
?>
<span>Periodo de dieta desde <?php echo $fechaInicio ?> hasta <?php echo $fechaFin ?><br> totales de la dieta <?php $diferencia_dias ?></span>  
<?php for ($index = 0; $index < $diferencia_dias; $index++) { ?>
    <label>Tipo Comida</label>
    <?php for ($index = 0; $index < count($tipoComida); $index++) { ?>
        <input type="text" value="<?php echo $tipoComida ?>">
        <?php } ?>
    <?php } ?>


?>

