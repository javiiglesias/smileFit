<?php if($cliente){?>    <script src="view/js/validaModificaCliente.js" type="text/javascript"></script>    <link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">    <form id="form" name="form" method="post" action="?ctl=cliente&act=ModificarDatos&param=<?php echo $cliente->getId();?>" >            <div class="form-group">                <input name="id" type="hidden" class="form-control" value="<?php echo $cliente->getId(); ?>" />              Nombre:  <input id="name" name="name" class="form-control" type="text" value="<?php echo $cliente->getNombre() ?>" readonly />                <span id='name_error' class=errorMsg >Introduce un nombre valido, solo letras<br/></span>                Apellidos:  <input id="lastname" name="lastname" class="form-control" type="text" value="<?php echo $cliente->getApellidos() ?>" readonly />                <span id='lastname_error' class=errorMsg >Introduce un apellido valido, solo letras<br/></span>                Edad:  <input id="age" name="age" class="form-control" type="text" value="<?php echo $cliente->getEdad() ?>" readonly />                <span id='age_error' class=errorMsg >Introduce una edad correcta (numeros de 1-2 digitos)<br/></span>                Email:  <input id="email" name="email" class="form-control" type="text" value="<?php echo $cliente->getEmail() ?>" readonly />                <span id='email_error' class=errorMsg>Introduce un email valido<br/></span>                Telefono:  <input id="telefono" name="telefono" class="form-control" type="text" value="<?php echo $cliente->getTelefono() ?>" readonly />                <span id='telefono_error' class=errorMsg >Introduce un numero de telefono valido (9 digitos)<br/></span>                Foto:   <img src="" id="foto" name="foto" alt="" /> </br>                    <input id="button" class="btn btn-default" onclick="can()" value="Modificar Datos"/> </br>                    <input type="submit" id="Submit" class="btn btn-default" name="modificar" value="Guardar Cambios"  style="visibility : hidden" />            </div>    </form>        <form action="?ctl=cliente&act=EliminarCliente&param=<?php echo $cliente->getId();?>" method="post">            <input type="submit" id="eliminar" class="btn btn-danger" name="eliminar" value="Dar de baja la cuenta" onclick="window.confirm('¿Estas Seguro que quieres borrar la cuenta?')"/>        </form>    </div>    <script type="application/javascript">        function can() {            document.getElementById("name").readOnly=false;            document.getElementById("lastname").readOnly=false;            document.getElementById("age").readOnly=false;            document.getElementById("email").readOnly=false;            document.getElementById("telefono").readOnly=false;            document.getElementById("button").style.visibility='hidden';            document.getElementById("Submit").style.visibility='visible';        }    </script><?php } ?>