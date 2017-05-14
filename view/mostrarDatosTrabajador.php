<?php if($worker){?>

    <script type="text/javascript" src="view/js/validaModificaCliente.js"></script>
    <link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />
    <div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">
    
<?php foreach ($worker as $worker): ?>
    <form id="form" name="form" method="post" action="?ctl=cliente&act=ModificarDatos&param=<?php echo $worker->getId();?>" >
            <div class="form-group">
                <input name="id" type="hidden" class="form-control" value="<?php echo $worker->getId(); ?>" />
              Nombre:  <input id="name" name="name" class="form-control" type="text" value="<?php echo $worker->getNombre() ?>" readonly />
                <span id='name_error' class=errorMsg >Introduce un nombre válido, solo letras<br/></span>
                Apellidos:  <input id="lastname" name="lastname" class="form-control" type="text" value="<?php echo $worker->getApellidos() ?>" readonly />
                <span id='lastname_error' class=errorMsg >Introduce un apellido válido, solo letras<br/></span>
                Edad:  <input id="age" name="age" class="form-control" type="text" value="<?php echo $worker->getFechaNacimiento() ?>" readonly />
                <span id='age_error' class=errorMsg >Introduce una edad correcta (números de 1-2 digitos)<br/></span>
                Email:  <input id="email" name="email" class="form-control" type="text" value="<?php echo $worker->getEmail() ?>" readonly />
                <span id='email_error' class=errorMsg>Introduce un email válido<br/></span>
                Telefono:  <input id="telefono" name="telefono" class="form-control" type="text" value="<?php echo $worker->getTelefono() ?>" readonly />
                <span id='telefono_error' class=errorMsg >Introduce un número de teléfono válido (9 dígitos)<br/></span>
                Foto:   <img src="<?php echo $worker->getFoto()?>" id="foto" name="foto" alt="" /> <br/>

                    <input id="button" class="btn btn-default" onclick="can()" value="Modificar Datos"/> <br/>
                    <input type="submit" id="Submit" class="btn btn-default" name="modificar" value="Guardar Cambios" style="visibility : hidden" />

            </div>

    </form>



        <form action="?ctl=cliente&act=EliminarCliente&param=<?php echo $worker->getId();?> "method="post">
            <input type="submit" id="eliminar" class="btn btn-danger" name="eliminar" value="Dar de baja la cuenta" onclick="window.confirm('¿Estás Seguro que quieres borrar la cuenta?')"/>
        </form>

<?php endforeach;?>

    </div>
    <?php } ?>
    <script type="application/javascript">

        function can() {
            document.getElementById("name").readOnly=false;
            document.getElementById("lastname").readOnly=false;
            document.getElementById("age").readOnly=false;
            document.getElementById("email").readOnly=false;
            document.getElementById("telefono").readOnly=false;
            document.getElementById("button").style.visibility='hidden';
            document.getElementById("Submit").style.visibility='visible';

        }

    </script>
    </div>