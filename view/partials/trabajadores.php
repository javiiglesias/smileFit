<?php require_once("controller/mostrarDatosTrabajadores_ctl.php");?>

    
    <?php foreach ($worker as $trabajador): ?>
   
    <div class="mTB30 targetaUsuario col-xs-12">  
            <div class="col-sm-4 col-xs-12">
                <?php if ($trabajador->getFoto()) { ?>
                    Foto:   <img src="view/images/<?php echo $trabajador->getFoto() ?>" class="img-responsive " id="foto" name="foto" alt="" /> <br/>

                   <!-- <input  class="form-control" name="foto" value="<?php echo $trabajador->getFoto();?>" id="foto" readonly />-->
                <?php } ?>
            </div>
            <div class="col-xs-12 col-sm-6 bgdada ">
                <input name="id" type="hidden" class="form-control" value="<?php echo $trabajador->getId(); ?>" />
      
                <span>Nombre:</span><br>
                    <input id="name" name="name" class="form-control" type="text" value="<?php echo $trabajador->getNombre() ?>" readonly />
               
                <span>Apellidos:</span> <br> <input id="lastname" name="lastname" class="form-control" type="text" value="<?php echo $trabajador->getApellidos() ?>" readonly />
               
                <span> Fecha nacimiento:</span><br>  <input id="fechaNacimiento" name="fechaNacimiento" class="form-control" type="text" value="<?php echo $trabajador->getFechaNacimiento() ?>" readonly />
               
                <span>Email:</span> <br> <input id="email" name="email" class="form-control" type="text" value="<?php echo $trabajador->getEmail() ?>" readonly />
               
                <span>Telefono:</span><br>  <input id="telefono" name="telefono" class="form-control" type="text" value="<?php echo $trabajador->getTelefono() ?>" readonly />
              
                <a  class="btn btn-success" href="?ctl=admin&act=MostrarDatos&param=<?php echo $trabajador->getId(); ?>" >Modificar</a>
            </div>
  

   
</div>
<?php endforeach; ?>
