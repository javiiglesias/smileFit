<?php if ($worker) { ?>

    <script type="text/javascript" src="view/js/validaModificaCliente.js"></script>
    <link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">

            <?php foreach ($worker as $worker): ?>
                <form id="form" name="form" method="post" action="?ctl=admin&act=ModificarDatosTrabajador&param=<?php echo $worker->getId(); ?>" >
                    <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                            <?php if($worker->getFoto()){?>
                            Foto:   <img src="images/<?php echo $worker->getFoto() ?>" id="foto" name="foto" alt="" /> <br/>
                            
                            <input type=text" class="form-control" name="foto" value="<?php echo $worker->getFoto();?>" id="foto" readonly>
                            <?php }?>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <input name="id" type="hidden" class="form-control" value="<?php echo $worker->getId(); ?>" />
                            Nombre:  <input id="name" name="name" class="form-control" type="text" value="<?php echo $worker->getNombre() ?>" readonly />
                            <span id='name_error' class=errorMsg >Introduce un nombre válido, solo letras<br/></span>
                            Apellidos:  <input id="lastname" name="lastname" class="form-control" type="text" value="<?php echo $worker->getApellidos() ?>" readonly />
                            <span id='lastname_error' class=errorMsg >Introduce un apellido válido, solo letras<br/></span>
                            Edad:  <input id="fechaNacimiento" name="fechaNacimiento" class="form-control" type="text" value="<?php echo $worker->getFechaNacimiento() ?>" readonly />
                            <span id='age_error' class=errorMsg >Introduce una edad correcta (números de 1-2 digitos)<br/></span>
                            Email:  <input id="email" name="email" class="form-control" type="text" value="<?php echo $worker->getEmail() ?>" readonly />
                            <span id='email_error' class=errorMsg>Introduce un email válido<br/></span>
                            Telefono:  <input id="telefono" name="telefono" class="form-control" type="text" value="<?php echo $worker->getTelefono() ?>" readonly />
                            <span id='telefono_error' class=errorMsg >Introduce un número de teléfono válido (9 dígitos)<br/></span>

                        </div>
                        <div class="col-xs-12 text-center">
                            <input type="button" id="button" class="btn btn-default" onclick="can()" value="Modificar Datos"/>
                            <input type="submit" id="Submit" class="btn btn-default" name="modificar" value="Guardar Cambios" style="visibility : hidden" />
                        </div>
                    </div>

                </form>



                <form action="?ctl=admmin&act=EliminarTrabajador&param=<?php echo $worker->getId(); ?>" method="post">
                    <input type="submit" id="eliminar" class="btn btn-danger" name="eliminar" value="Dar de baja la cuenta" onclick="window.confirm('¿Estás Seguro que quieres borrar la cuenta?')"/>
                </form>
            <script type="application/javascript">

        function can() {

        document.getElementsByTagName("input").readOnly=false;        
        document.getElementById("button").style.visibility='hidden';
        document.getElementById("submit").style.visibility='visible';

        }

    </script>
            <?php endforeach; ?>

        </div>
    <?php } ?>
    
</div>