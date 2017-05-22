<<<<<<< HEAD
<?php if ($worker) { ?>
    <script src="view/js/validaModificaTrabajador.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">

        <form id="form" name="form" method="post" action="?ctl=admin&act=ModificarDatosTrabajador&param=<?php echo $worker->getId(); ?>" >
    <div class="form-group">
        <div class="col-sm-6 col-xs-12">
            <?php if ($worker->getFoto()) { ?>
            Foto:   <img src="images/<?php echo $worker->getFoto() ?>" id="foto" name="foto" alt="" /> <br/>

         <input type="text" class="form-control" name="foto" value="<?php echo $worker->getFoto(); ?>" id="foto" readonly>
                        <?php } ?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <input name="id" type="hidden" class="form-control" value="<?php echo $worker->getId(); ?>" />
                    Nombre:  <input id="name" name="name" class="form-control" type="text" value="<?php echo $worker->getNombre() ?>" readonly />
                    <span id='name_error' class=errorMsg >Introduce un nombre válido, solo letras<br/></span>
                    Apellidos:  <input id="lastname" name="lastname" class="form-control" type="text" value="<?php echo $worker->getApellidos() ?>" readonly />
                    <span id='lastname_error' class=errorMsg >Introduce un apellido válido, solo letras<br/></span>
                    Fecha Nacimiento:  <input id="fechaNacimiento" name="fechaNacimiento" class="form-control" type="text" value="<?php echo $worker->getFechaNacimiento() ?>" readonly />
                    <span id='fechaNacimiento_error' class=errorMsg >Introduce una fecha correcta (Formato yyyy/mm/dd)<br/></span>
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
        <form action="?ctl=admin&act=EliminarTrabajador&param=<?php echo $worker->getId(); ?>" method="post">
        <input type="submit" id="eliminar" class="btn btn-danger" name="eliminar" value="Dar de baja la cuenta" onclick="window.confirm('¿Estas Seguro que quieres borrar esta cuenta?')"/>
    </form>

        </div>

</div>
<script type="application/javascript">

    function can() {
    document.getElementById("name").readOnly=false;
    document.getElementById("lastname").readOnly=false;
    document.getElementById("fechaNacimiento").readOnly=false;
    document.getElementById("email").readOnly=false;
    document.getElementById("telefono").readOnly=false;
    document.getElementById("button").style.visibility='hidden';
    document.getElementById("Submit").style.visibility='visible';

    }

</script>


<?php }?>

=======
<?php if ($worker) { ?>    <script src="view/js/validaModificaTrabajador.js" type="text/javascript"></script>    <link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">        <form id="form" name="form" method="post" action="?ctl=admin&act=ModificarDatosTrabajador&param=<?php echo $worker->getId(); ?>" >            <div class="form-group">                <div class="col-sm-6 col-xs-12">                    <?php if ($worker->getFoto()) { ?>                        Foto:   <img src="images/<?php echo $worker->getFoto() ?>" id="foto" name="foto" alt="" /> <br/>                        <input type=text" class="form-control" name="foto" value="<?php echo $worker->getFoto(); ?>" id="foto" readonly>                        <?php } ?>                </div>                <div class="col-xs-12 col-sm-6">                    <input name="id" type="hidden" class="form-control" value="<?php echo $worker->getId(); ?>" />                    Nombre:  <input id="name" name="name" class="form-control" type="text" value="<?php echo $worker->getNombre() ?>" readonly />                    <span id='name_error' class=errorMsg >Introduce un nombre válido, solo letras<br/></span>                    Apellidos:  <input id="lastname" name="lastname" class="form-control" type="text" value="<?php echo $worker->getApellidos() ?>" readonly />                    <span id='lastname_error' class=errorMsg >Introduce un apellido válido, solo letras<br/></span>                    Fecha Nacimiento:  <input id="fechaNacimiento" name="fechaNacimiento" class="form-control" type="text" value="<?php echo $worker->getFechaNacimiento() ?>" readonly />                    <span id='fechaNacimiento_error' class=errorMsg >Introduce una fecha correcta (Formato yyyy/mm/dd)<br/></span>                    Email:  <input id="email" name="email" class="form-control" type="text" value="<?php echo $worker->getEmail() ?>" readonly />                    <span id='email_error' class=errorMsg>Introduce un email válido<br/></span>                    Telefono:  <input id="telefono" name="telefono" class="form-control" type="text" value="<?php echo $worker->getTelefono() ?>" readonly />                    <span id='telefono_error' class=errorMsg >Introduce un número de teléfono válido (9 dígitos)<br/></span>                </div>                <div class="col-xs-12 text-center">                    <input type="button" id="button" class="btn btn-default" onclick="can()" value="Modificar Datos"/>                    <input type="submit" id="Submit" class="btn btn-default" name="modificar" value="Guardar Cambios" style="visibility : hidden" />                </div>            </div>        </form>        <form action="?ctl=admin&act=EliminarTrabajador&param=<?php echo $worker->getId(); ?>" method="post">        <input type="submit" id="eliminar" class="btn btn-danger" name="eliminar" value="Dar de baja la cuenta" onclick="window.confirm('¿Estas Seguro que quieres borrar esta cuenta?')"/>    </form></div><script type="application/javascript">    function can() {    document.getElementById("name").readOnly=false;    document.getElementById("lastname").readOnly=false;    document.getElementById("fechaNacimiento").readOnly=false;    document.getElementById("email").readOnly=false;    document.getElementById("telefono").readOnly=false;    document.getElementById("button").style.visibility='hidden';    document.getElementById("Submit").style.visibility='visible';    }</script><?php }?>
>>>>>>> Marcos
