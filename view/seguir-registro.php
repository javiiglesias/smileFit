<<<<<<< HEAD

<?php require_once('partials/header-altaEvento.php');?>
<script src="view/js/validaAltaTrabajador.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />
<div class="container-fluid">
    <div class="container">
        <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
            <img src="view/images/Logo.png" class="img-responsive img-Logologin">
        </div>
        <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
            <div class="container-login">
                <form id="form" action="?ctl=admin&act=completa-registro" method="post">
                    <h1 class="text-center">Registrarse</h1>
                    <small class="col-md-offset-1">Por favor,rellenar todos los campos. </small>

                    <span> <? if(isset($error)){echo $error;}?></span>
                    <div class="form-group space-top">
                        <label>Numero de Usuario:</label>
                        <input type="text" name="idUser" value="<?php echo $idUser?>" readonly class="form-control">
                    </div>
                    <div class="form-group space-top">
                        <label>Nombre de Usuario:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                        <span id='nombre_error' class=errorMsg >Introduce un nombre valido (letras)</span>
                    </div>
                      <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control">
                          <span id='apellidos_error' class=errorMsg >Introduce unos apellidos validos (letras)</span>
                    </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" id ="email" name="email" class="form-control">
                         <span id='email_error' class=errorMsg >Introduce un email valido </span>
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text"  maxlength="10" id="telf" name="telefono" class="form-control">
                        <span id='telf_error' class=errorMsg >Introduce un telefono valido (9 numeros)</span>
                    </div>

                    <div class="form-group">

                        <label>fecha de nacimiento</label>
                        <input type='text' id="fechaNacimiento" name="fechaNacimiento" class="form-control"  />
                        <span id='fechaNacimiento_error' class=errorMsg >Introduce una fecha valida (YYYY-MM-DD)</span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
               
                    </div>
                      <div class="form-group">
                        <label>foto</label>
                        <input type="text"  name="foto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tipo Trabajador:</label>
                        <input type="text" name="rol" value="<?php echo $rol?>" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input type="text" name="pass" value="<?php echo $password?>" readonly class="form-control">
                    </div>
                  
                   
                    <div class="col-md-offset-3 col-xs-offset-2">
                        <button type="submit" name="Submit" class="btn btn-info">  Completar Registrarse    <image class="btn-icon" src="view/images/registre.png"/></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script type="text/javascript">
        $(function () {
            $('#fechaNacimiento').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            </script>
            
            
            
            
            
            
            
=======

<?php require_once('partials/header-altaEvento.php');?>
<script src="view/js/validaAltaTrabajador.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />
<div class="container-fluid">
    <div class="container">
        <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
            <img src="view/images/Logo.png" class="img-responsive img-Logologin">
        </div>
        <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
            <div class="container-login">
                <form id="form" action="?ctl=admin&act=completa-registro" method="post">
                    <h1 class="text-center">Registrarse</h1>
                    <small class="col-md-offset-1">Por favor,rellenar todos los campos. </small>

                    <span> <? if(isset($error)){echo $error;}?></span>
                    <div class="form-group space-top">
                        <label>Numero de Usuario:</label>
                        <input type="text" name="idUser" value="<?php echo $idUser?>" readonly class="form-control">
                    </div>
                    <div class="form-group space-top">
                        <label>Nombre de Usuario:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                        <span id='nombre_error' class=errorMsg >Introduce un nombre valido (letras)</span>
                    </div>
                      <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos" class="form-control">
                          <span id='apellidos_error' class=errorMsg >Introduce unos apellidos validos (letras)</span>
                    </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" id ="email" name="email" class="form-control">
                         <span id='email_error' class=errorMsg >Introduce un email valido </span>
                    </div>
                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="text"  maxlength="10" id="telf" name="telefono" class="form-control">
                        <span id='telf_error' class=errorMsg >Introduce un telefono valido (9 numeros)</span>
                    </div>

                    <div class="form-group">

                        <label>fecha de nacimiento</label>
                        <input type='text' id="fechaNacimiento" name="fechaNacimiento" class="form-control"  />
                        <span id='fechaNacimiento_error' class=errorMsg >Introduce una fecha valida (YYYY-MM-DD)</span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
               
                    </div>
                      <div class="form-group">
                        <label>foto</label>
                        <input type="text"  name="foto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tipo Trabajador:</label>
                        <input type="text" name="rol" value="<?php echo $rol?>" readonly class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input type="text" name="pass" value="<?php echo $password?>" readonly class="form-control">
                    </div>
                  
                   
                    <div class="col-md-offset-3 col-xs-offset-2">
                        <button type="submit" name="Submit" class="btn btn-info">  Completar Registrarse    <image class="btn-icon" src="view/images/registre.png"/></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script type="text/javascript">
        $(function () {
            $('#fechaNacimiento').datetimepicker({
                language: 'es',
                minDate: new Date()
            });
            </script>
            
            
            
            
            
            
            
>>>>>>> Marcos
            