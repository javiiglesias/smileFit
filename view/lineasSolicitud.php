<?require_once("controller/lineasSolicitud_ctl.php");?>
<div class="container">
        <h3><?php var_dump($trabajador); ?></h3>
        <h3><?php var_dump($cliente); ?></h3>
        <h3><?php echo $titulo; ?></h3>
        <?php foreach ($lineasSolicitud as $lineasSolicitudes): ?>
            <!-- <div class="alert alert-success"> -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 borderGris pL0 mensaje">
            <!--Si es trabajador -->
                <?php if(isset($trabajador)){ ?>
                <span><b><?= $trabajador->getNombre() . " " . $trabajador->getApellidos(). ": "; ?></b></span>
                <?php } else if(isset($cliente)){?>
                <!-- Si es cliente-->
                <span><b><?= $cliente->getNombre() . " " . $cliente->getApellidos(). ": "; ?></b></span>
                <?php } ?>
                <span><?php echo $lineasSolicitudes->getDescripcion(); ?></span>
            </div>
        <?php endforeach ?>
        <div class="col-xs-12 col-sm-12">
            <?php if(isset($trabajador)){ ?>
                <form action="?ctl=trabajador&act=enviarLineaSolicitud" method="post">                
                    <input type="hidden" name="idEmisor" value="<?php echo $idTrabajador ?>">
            <?php } else if($cliente){?>
                <form action="?ctl=cliente&act=enviarLineaSolicitud" method="post">
                    <input type="hidden" name="idEmisor" value="<?php echo $idCliente ?>">
                <?php } ?>                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 pL0">
                    <input type="hidden" name="idSolicitud" value="<?php echo $idSolicitud ?>">
                    <input type="text" name="linea_solicitud" placeholder="Enviar mensaje" class="form-control">
                    <input type="submit" class="btn btn-warning mT20" value="Enviar Mensaje">
                </div>                   
            </form>            
            <?php if($_SESSION['test']){?>
            <form action="action">
                    <input type="submit" class="btn btn-success mT20" value="Asignar Solicitud">  
            </form>
            <?php }?>

        </div>
  
    <!-- </div> -->
</div>