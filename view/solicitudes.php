<?require_once("controller/solicitudes_ctl.php");?>
<div class="container">
<?php foreach ($solicitud as $solicitudes): ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 borderGris pL0">
                
        <div class="col-xs-12 col-md-9 col-sm-6 col-lg-8pB35 h115 mB15">
            <a href="?ctl=trabajador&act=mostrarLineasSolicitud&param=<?php echo $solicitudes->getId();?>" >
                <h3> <?echo $solicitudes->getDescripcion();?></h3><br>
            </a>
            <span class="lite fz13"><? echo $solicitudes->getFecha();?></span><br>
        </div>
    </div>
    <?php endforeach ?>
</div>