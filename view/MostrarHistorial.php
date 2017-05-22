<?php
    if (count($entreno) > 0) { ?>
        <div style="text-align:center;">
            <table border="1" cellspacing="3" cellpadding="0" class="tabla" width="50%">
            <tr>
                <th style="text-align: center;">Nombre</th>
                <th style="text-align: center;">Fecha Inicio</th>
                <th style="text-align: center;">Fecha Fin  </th>
            </tr>
            <?php foreach ($entreno as $entrenamiento): ?>
                <tr>
                    <td><?php echo $entrenamiento->getDescripcion(); ?></td>
                    <td><?php echo $entrenamiento->getFechaInicio(); ?></td>
                    <td><?php echo $entrenamiento->getFechaFin(); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
        <hr>
        <?php
    }
    ?>
<?php
    if (count($entreno) > 0) { ?>
    <div style="text-align:center;">
        <table border="1" cellspacing="3" cellpadding="0" class="tabla" width="50%">
            <tr>
                <th style="text-align: center;">Nombre</th>
                <th style="text-align: center;">Fecha Inicio</th>
                <th style="text-align: center;">Fecha Fin  </th>
            </tr>
            <?php foreach ($dietas as $nutricion): ?>
                <tr>
                    <td><?php echo $nutricion->getDescripcion(); ?></td>
                    <td><?php echo $nutricion->getFechaInicio(); ?></td>
                    <td><?php echo $nutricion->getFechaFin(); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
<?php
}
?>

