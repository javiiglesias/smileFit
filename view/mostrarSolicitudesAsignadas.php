<?require_once("controller/mostrarSolicitudesAsignadas_ctl.php");?>
<div class="container">
<?php foreach ($entrenamiento as $entrenamientos): 
 ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 borderGris pL0">
 
        <div class="col-xs-12 col-md-9 col-sm-6 col-lg-8pB35 h115 mB15">
            <h2><?php echo $entrenamientos->getDescripcion();?></h2>
            <span class="lite fz13"><b>Fecha Inicio: </b> <?php echo $entrenamientos->getFechaInicio();?></span>
            <span class="lite fz13"><b>&nbsp; Fecha Fin: </b><?php echo $entrenamientos->getFechaFin();?></span><br>
            <span class="lite fz13"><b>Cliente: </b><?php echo $entrenamientos->getIdCliente();?></span>
            <span class="lite fz13"><b>&nbsp; Trabajador: </b><?php echo $entrenamientos->getIdTrabajador();?></span><br>
            <span class="lite fz13"><b>Solicitud: </b><?php echo $entrenamientos->getIdSolicitud();?></span>
        </div>
    </div>
    <?php endforeach ?>
</div>
