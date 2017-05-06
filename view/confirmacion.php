<div class="container-fluid">
    <div class="container" >
        <div class="col-xs-12 col-md-12 container-confirmacio">
            <?php if (strpos($mensaje, "modificado") || strpos($mensaje, "eliminat")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=login&act=login'>Volver a la lista</a></p>
                </div>
            <?php } ?>
            <?php if (strpos($mensaje, "registrado")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=login&act=login'>Iniciar Sesion</a></p>
                </div>
            <?php } ?>
            <?php if (strpos($mensaje, "añadido")) { ?>
                <div class="alert alert-dismissible alert-success text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h3> <?php echo $mensaje; ?>  <img src="view/images/confirm.png" class="icon"</h3>
                    <p><a class="alert-link" href='?ctl=login&act=login'>Volver a la lista</a></p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>