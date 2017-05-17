<?require_once("controller/lineasSolicitud_ctl.php");?>
<div class="container">
        <h3><?php echo $titulo; ?></h3>
        <?php foreach ($lineasSolicitud as $lineasSolicitudes): ?>
            <!-- <div class="alert alert-success"> -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 borderGris pL0">
            <!--Si es trabajador -->
                <?php if(isset($trabajador)){ ?>
                <span><?= $trabajador->getNombre() . " " . $trabajador->getApellidos(). ": "; ?></span>
                <?php } else{?>
                <!-- Si es cliente-->
                <span><?= $cliente->getNombre() . " " . $cliente->getApellidos(). ": "; ?></span>
                <?php } ?>
                <span><?php echo $lineasSolicitudes->getDescripcion(); ?></span>
            </div>
        <?php endforeach ?>
        <div class="col-xs-12 col-sm-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 pL0">
                <input type="text" name="linea_solicitud" placeholder="Enviar mensaje" class="form-control">
            </div>
            <form action="?ctl=trabajador&act=enviarLineaSolicitud&param=<?php $idTrabajador; ?>">
                <input type="submit" class="btn btn-warning mT20" value="Enviar Mensaje">   
            </form>
            <?php if($_SESSION['test']){?>
            <form action="action">
                    <input type="submit" class="btn btn-success mT20" value="Asignar Solicitud">  
            </form>
            <?php }?>

        </div>
  
    <!-- </div> -->
</div>