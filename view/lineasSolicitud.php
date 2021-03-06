<?php require_once("controller/lineasSolicitud_ctl.php");?>
<div class="container">     
        <h3><?php echo $titulo; ?></h3>
        <?php foreach ($lineasSolicitud as $lineasSolicitudes): ?>
            <?php 
                $idC = $lineasSolicitudes->getIdCliente();
                $idT = $lineasSolicitudes->getIdTrabajador();
                //FALTA SACAR EL NOMBRE DEL EMISOR CORRECTO DEL MENSAJE
                //var_dump($idT);

                // if(isset($idT)){ 
                //     $nombreT = $tr->getNombreApellidos($idT);
                //     var_dump($nombreT);
                // } else if(isset($idC)){
                //     $nombreC = $cl->getNombreApellidos($idC);
                //     var_dump($nombreC);
                // }
            ?>
            <!-- <div class="alert alert-success"> -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 borderGris pL0 mensaje">
            <!--Si es trabajador -->
                <?php if(isset($trabajador)){ ?>
                <span><b><?= $trabajador->getNombre() . " " . $trabajador->getApellidos(). ": "; ?></b></span>
                <?php } else if(isset($cliente)){?>
                <!-- Si es cliente-->
                <span><b><?= $cliente->getNombre() . " " . $cliente->getApellidos(). ": "; ?></b></span>
                <?php } ?>

<!-- 
                <?php if(isset($nombreT)){ ?>
                <span><b><?php echo $nombreT;": " ?></b></span>
                <?php } else if(isset($nombreC)){?>
                <span><b><?php echo $nombreC;": " ?></b></span>
                <?php } ?> -->


                <span><?php echo $lineasSolicitudes->getDescripcion(); ?></span>
            </div>
        <?php endforeach ?>
        <div class="col-xs-12 col-sm-12">
            <?php if(isset($idTrabajador)){ ?>
                <form action="?ctl=trabajador&act=enviarLineaSolicitud&param=<?php echo $idSolicitud; ?>" method="post">                
                    <input type="hidden" name="idEmisor" value="<?php echo $idTrabajador ?>">
            <?php } else if(isset($idCliente)){?>
                <form action="?ctl=cliente&act=enviarLineaSolicitud&param=<?php echo $idSolicitud; ?>" method="post">
                    <input type="hidden" name="idEmisor" value="<?php echo $idCliente ?>">
                <?php } ?>                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT20 pL0">
                    <input type="hidden" name="titulo" value="<?php echo $titulo; ?>">
                    <input type="hidden" name="idSolicitud" value="<?php echo $idSolicitud; ?>">
                    <input type="text" name="linea_solicitud" placeholder="Enviar mensaje" class="form-control">
                    <input type="submit" name="enviar" class="btn btn-warning mT20" value="Enviar Mensaje">
                </div>                   
            </form>
            <?php if($asignado == false) {
                if(isset($idTrabajador)){             
                    if($_SESSION['test']){ ?>
            <form action="?ctl=trabajador&act=asignarSolicitud" method="post">
                    <input type="hidden" name="idSolicitud" value="<?php echo $idSolicitud; ?>">
                    <input type="hidden" name="idTrabajador" value="<?php echo $idTrabajador; ?>">
                    <input type="hidden" name="idCliente" value="<?php echo $idClienteSolicitador; ?>">
                    <input type="submit" name="asignar" class="btn btn-success mT20" value="Asignar Solicitud">  
            </form>
                    <?php }
                    }
                } ?>

        </div>
  
    <!-- </div> -->
</div>