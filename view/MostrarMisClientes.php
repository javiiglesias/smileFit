<?php
include  ('controller/checkSession.php');

if(checkSession()) {


    if (count($entreno) > 0) { ?>

     <a href="javascript:history.back(1)" class="btn btn-default fixed">Volver Atrás</a>
<div class="container">
        <div style="text-align:center;">
            <table border="1" cellspacing="3" cellpadding="0" class="tabla" width="50%">
                <tr>
                    <th style="text-align: center;">Id del Cliente</th>
                    <th style="text-align: center;">Nombre del Entrenamiento</th>
                    <th style="text-align: center;">Fecha Inicio</th>
                    <th style="text-align: center;">Fecha Fin</th>
                </tr>
                <?php foreach ($entreno as $entrenamiento): ?>
                    <tr>
                        <td><?php echo $entrenamiento->getIdCliente(); ?></td>
                        <td><?php echo $entrenamiento->getDescripcion(); ?></td>
                        <td><?php echo $entrenamiento->getFechaInicio(); ?></td>
                        <td><?php echo $entrenamiento->getFechaFin(); ?></td>

                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <hr>
</div>
        <?php
    }


    if (count($dietas) > 0) { ?>

     <a href="javascript:history.back(1)" class="btn btn-default fixed">Volver Atrás</a>
<div class="container mauto">
        <div class="col-xs-10 col-xs-offset-4"style="text-align:center;">
            <table border="1" cellspacing="3" cellpadding="0" class="tabla" width="50%">
                <tr>
                    <th style="text-align: center;">Id del Cliente</th>
                    <th style="text-align: center;">Nombre de la Dieta</th>
                    <th style="text-align: center;">Fecha Inicio</th>
                    <th style="text-align: center;">Fecha Fin</th>
                </tr>
                <?php foreach ($dietas as $nutricion): ?>
                    <tr>
                        <td><?php echo $nutricion->getIdCliente(); ?></td>
                        <td><?php echo $nutricion->getDescripcion(); ?></td>
                        <td><?php echo $nutricion->getFechaInicio(); ?></td>
                        <td><?php echo $nutricion->getFechaFin(); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
</div>
        <?php
                             
    } else {

        header("Location: ?ctl=inicio");
    }
}


