<<<<<<< HEAD
<?php require_once("controller/solicitudes_ctl.php");?>
<?php if(count($solicitud) > 0){ 
 foreach ($solicitud as $solicitudes): ?> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 borderGris pL0">
                
        <div class="col-xs-12 col-md-9 col-sm-6 col-lg-8pB35 h115 mB15">
        <a href="?ctl=trabajador&act=mostrarLineasSolicitud&param=<?php echo $solicitudes->getId();?>" >
                <h3><?php echo $solicitudes->getTitulo();?></h3><br>
            </a>
            <span class="lite fz13"><?php echo $solicitudes->getDescripcion();?></span><br>
            <span class="lite fz13"><?php $fecha = $solicitudes->getFecha();
                                            $f = date("d-m-Y", strtotime($fecha));
                                            echo $f; ?></span><br>
        </div>
    </div>
       <?php endforeach; 
    }else{ 
        $msg="No hay Solicitudes pendientes"; ?>
        <h3><?php echo $msg; ?></h3>
=======
<?php require_once("controller/solicitudes_ctl.php");?>
<?php if(count($solicitud) > 0){ 
 foreach ($solicitud as $solicitudes): ?> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 borderGris pL0">
                
        <div class="col-xs-12 col-md-9 col-sm-6 col-lg-8pB35 h115 mB15">
        <a href="?ctl=trabajador&act=mostrarLineasSolicitud&param=<?php echo $solicitudes->getId();?>" >
                <h3><?php echo $solicitudes->getTitulo();?></h3><br>
            </a>
            <span class="lite fz13"><?php echo $solicitudes->getDescripcion();?></span><br>
            <span class="lite fz13"><?php $fecha = $solicitudes->getFecha();
                                            $f = date("d-m-Y", strtotime($fecha));
                                            echo $f; ?></span><br>
        </div>
    </div>
       <?php endforeach; 
    }else{ 
        $msg="No hay Solicitudes pendientes"; ?>
        <h3><?php echo $msg; ?></h3>
>>>>>>> Marcos
    <?php } ?> 