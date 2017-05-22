<script src="view/js/validaAñadirDatosCliente.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">
      <a href="javascript:history.back(1)" class="btn btn-default fixed">Volver Atrás</a>


    <form id="form" action="?ctl=cliente&act=AñadirDatos&param=<?php echo $_SESSION["test2"] ?>" method="post">
        <div class="form-group">
            Nombre:  <input id="name" name="name" class="form-control" type="text" />
            <span id='name_error' class=errorMsg >Introduce un nombre válido, solo letras<br/></span>
            Apellidos:  <input id="lastname" name="lastname" class="form-control" type="text"  />
            <span id='lastname_error' class=errorMsg >Introduce un apellido válido, solo letras<br/></span>
            Edad:  <input id="age" name="age" class="form-control" type="text"  />
            <span id='age_error' class=errorMsg >Introduce una edad valida (1-2 numeros)<br/></span>
            Email:  <input id="email" name="email" class="form-control" type="text"  />
            <span id='email_error' class=errorMsg>Introduce un email válido<br/></span>
            Telefono:  <input id="telefono" name="telefono" class="form-control" type="text"  />
            <span id='telefono_error' class=errorMsg >Introduce un número de teléfono válido (9 dígitos)<br/></span>
            Foto:   <img src="" id="foto" name="foto" alt="" /> </br>
                    <input id="idUser" name="idUser" type="hidden" value="<?php echo $_SESSION["test2"]?>"; />
            <input type="submit" id="Submit" class="btn btn-default" name="añadir" value="Dar Alta"/>

        </div>

    </form>

