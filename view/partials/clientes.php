<?php require_once("controller/mostrarClientes_ctl.php");?>

    
    <?php foreach ($customers as $customer): ?>
   
    <div class="mTB30 targetaUsuario col-xs-12">  
            <div class="col-sm-4 col-xs-12">
                <?php if ($customer->getFoto()) { ?>
                    Foto:   <img src="view/images/<?php echo $customer->getFoto() ?>" class="img-responsive " id="foto" name="foto" alt="" /> <br/>

                   
                <?php } ?>
            </div>
            <div class="col-xs-12 col-sm-6 bgdada ">
                <input name="id" type="hidden" class="form-control" value="<?php echo $customer->getId(); ?>" />
      
                <span>Nombre:</span><br>
                    <input id="name" name="name" class="form-control" type="text" value="<?php echo $customer->getNombre() ?>" readonly />
               
                <span>Apellidos:</span> <br> <input id="lastname" name="lastname" class="form-control" type="text" value="<?php echo $customer->getApellidos() ?>" readonly />
               
                <span> Edad:</span><br>  <input id="fechaNacimiento" name="edad" class="form-control" type="text" value="<?php echo $customer->getEdad() ?>" readonly />
               
                <span>Email:</span> <br> <input id="email" name="email" class="form-control" type="text" value="<?php echo $customer->getEmail() ?>" readonly />
               
                <span>Telefono:</span><br>  <input id="telefono" name="telefono" class="form-control" type="text" value="<?php echo $customer->getTelefono() ?>" readonly />
              
                <a   class=" nVisible btn btn-success" href="?ctl=admin&act=ModificarDatosCliente&param=<?php echo $customer->getId(); ?>" >Modificar</a>
            </div>
  

   
</div>
<?php endforeach; ?>
