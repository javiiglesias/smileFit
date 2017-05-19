<?php require_once("controller/ModificarDatosTrabajador_ctl.php");?>
   
    <div class="mTB30 targetaUsuario col-xs-12">  
            <div class="col-sm-4 col-xs-12">
                <?php if ($worker->getFoto()) { ?>
                    Foto:   <img src="view/images/<?php echo $worker->getFoto() ?>" class="img-responsive " id="foto" name="foto" alt="" /> <br/>

                   <!-- <input  class="form-control" name="foto" value="<?php echo $worker->getFoto();?>" id="foto" readonly />-->
                <?php } ?>
            </div>
            <div class="col-xs-12 col-sm-6 bgdada ">
                <input name="id" type="hidden" class="form-control" value="<?php echo $worker->getId(); ?>" />
                <span>Nombre:</span><br>
                    <input id="name" name="name" class="form-control" type="text" value="<?php echo $worker->getNombre() ?>" readonly />
               
                <span>Apellidos:</span> <br> <input id="lastname" name="lastname" class="form-control" type="text" value="<?php echo $worker->getApellidos() ?>" readonly />
               
                <span> Fecha nacimiento:</span><br>  <input id="fechaNacimiento" name="fechaNacimiento" class="form-control" type="text" value="<?php echo $worker->getFechaNacimiento() ?>" readonly />
               
                <span>Email:</span> <br> <input id="email" name="email" class="form-control" type="text" value="<?php echo $worker->getEmail() ?>" readonly />
               
                <span>Telefono:</span><br>  <input id="telefono" name="telefono" class="form-control" type="text" value="<?php echo $worker->getTelefono() ?>" readonly />
              
                <a  class="btn btn-success" href="?ctl=admin&act=ModificarDatosTrabajador&param=<?php echo $worker->getId(); ?>" >Modificar</a>
            </div>
    </div>