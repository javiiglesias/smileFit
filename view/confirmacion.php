<div class="container-fluid">
    <div class="container" >
          <a href="javascript:history.back(1)" class="btn btn-default fixed">Volver Atrás</a>
        <div class="col-xs-12 col-md-12 container-confirmacio">
            <?php if (strpos($mensaje, "modificado") || strpos($mensaje, "eliminat")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"></h3>
                
                    <p><a class="alert-link" href='?ctl=login&act=login'>Volver a la lista</a></p>
                </div>
            <?php } ?>
            <?php if (strpos($mensaje, "registrado")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"></h3>
                     
                    <p><a class="alert-link" href='?ctl=login&act=login'>Iniciar Sesion</a></p>
                </div>
            <?php } ?>
            <?php if (strpos($mensaje, "añadido")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"></h3>
                    
                    <p><a class="alert-link" href='?ctl=login&act=login'>Volver a la lista</a></p>
                </div>
            <?php } ?>

            <?php if (strpos($mensaje, "eliminado")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"></h3>
                    
                    <p><a class="alert-link" href='?ctl=menu&act=admin'>Volver a la lista</a></p>
          </div>
            <?php } ?>

            <?php if (strpos($mensaje, "enviado")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"></h3>


                    <p><a class="alert-link" href='?ctl=cliente&act=mostrarSolicitudes'>Ver solicitudes</a></p>

                </div>
            <?php } ?>

            <?php if (strpos($mensaje, "creado")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"></h3>


                    <p><a class="alert-link" href='?ctl=trabajador&act=mostrarSolicitudesAsignadas'>Ver Solicitudes En Curso</a></p>

                </div>
            <?php } ?>

            <?php if (strpos($mensaje, "ficha")) { ?>
                <div class="alert alert-dismissible alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"></h3>


                    <p><a class="alert-link" href='?ctl=cliente&act=mostrarSolicitudes'>Ver solicitudes</a></p>

                </div>
            <?php } ?>







        </div>




    </div>
</div>
