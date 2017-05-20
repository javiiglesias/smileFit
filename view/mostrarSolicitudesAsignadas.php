<?require_once("controller/mostrarSolicitudesAsignadas_ctl.php"); ?>
<div class="container">
    <?php if($usuarioRol == "Trabajador"):
        if(isset($dieta)){
           $entrenamiento= $dieta;
        }
        foreach ($entrenamiento as $entrenamientos): ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 borderGris pL0">
     
            <div class="col-xs-12 col-md-9 col-sm-6 col-lg-8pB35 h115 mB15">
                <h2><?php echo $entrenamientos->getDescripcion(); ?></h2>
                <span class="lite fz13"><b>Fecha Inicio: </b> <?php echo $entrenamientos->getFechaInicio(); ?></span>
                <span class="lite fz13"><b>&nbsp; Fecha Fin: </b><?php echo $entrenamientos->getFechaFin(); ?></span><br>
                <span class="lite fz13"><b>Cliente: </b><?php echo $entrenamientos->getIdCliente(); ?></span>
                <span class="lite fz13"><b>&nbsp; Trabajador: </b><?php echo $entrenamientos->getIdTrabajador(); ?></span><br>
                <span class="lite fz13"><b>Solicitud: </b><?php echo $entrenamientos->getIdSolicitud(); ?></span>
            </div>
        </div>
        <?php endforeach;
    else: 
        foreach ($entrenamiento as $entrenamientos): ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mT20 borderGris pL0">
     
                <div class="col-xs-6 col-md-5 col-sm-3 col-lg-8pB35 h115 mB15">
                    <h2><?php echo $entrenamientos->getDescripcion();?></h2>
                    <span class="lite fz13"><b>Fecha Inicio: </b> <?php echo $entrenamientos->getFechaInicio();?></span>
                    <span class="lite fz13"><b>&nbsp; Fecha Fin: </b><?php echo $entrenamientos->getFechaFin();?></span><br>
                    <span class="lite fz13"><b>Cliente: </b><?php echo $entrenamientos->getIdCliente();?></span>
                    <span class="lite fz13"><b>&nbsp; Trabajador: </b><?php echo $entrenamientos->getIdTrabajador();?></span><br>
                    <span class="lite fz13"><b>Solicitud: </b><?php echo $entrenamientos->getIdSolicitud();?></span>
                </div>
            </div>
        <?php endforeach;
        foreach ($dieta as $dietas): ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mT20 borderGris pL0">
     
            <div class="col-xs-6 col-md-5 col-sm-3 col-lg-8pB35 h115 mB15">
                <h2><?php echo $dietas->getDescripcion();?></h2>
                <span class="lite fz13"><b>Fecha Inicio: </b> <?php echo $dietas->getFechaInicio();?></span>
                <span class="lite fz13"><b>&nbsp; Fecha Fin: </b><?php echo $dietas->getFechaFin();?></span><br>
                <span class="lite fz13"><b>Cliente: </b><?php echo $dietas->getIdCliente();?></span>
                <span class="lite fz13"><b>&nbsp; Trabajador: </b><?php echo $dietas->getIdTrabajador();?></span><br>
                <span class="lite fz13"><b>Solicitud: </b><?php echo $dietas->getIdSolicitud();?></span>
            </div>
        </div>
        <?php endforeach;
        endif ?>
</div>
