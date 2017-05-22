<script src="view/js/validaAltaTrabajador.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />
  <a href="javascript:history.back(1)" class="btn btn-default fixed">Volver Atrás</a>
    <div class="container">
        <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
            <img src="view/images/Logo.png" class="img-responsive img-Logologin">
        </div>
        <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
            <div class="container-login">
                <form id="form" action="?ctl=admin&act=registro-trabajador" method="post">
                    
                    <span> <? if(isset($error)){echo $error;}?></span>
                    <div class="form-group space-top">
                        <label>Usuario del Trabajador:</label>
                        <input type="text" id="nuevo_Trabajador" name="nuevo_Trabajador" class="form-control">
                        <span id='nuevo_Trabajador_error' class=errorMsg >Introduce un nombre de usuario valido (letras y numeros)</span>
                    </div>
                 
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input minlength="4"  type="password" id="pass" name="pass"  class="form-control">
                        <span id='pass_error' class=errorMsg >Introduce una contraseña valida (4-15) caracteres</span>
                    </div>
                       <div class="form-group">
                        <label>Introduce nuevamente una  Contraseña:</label>
                        <input minlength="4" type="password" id="pass2" name="pass2" class="form-control">
                           <span id='pass2_error' class=errorMsg >La contraseña no coincide</span>
                    </div>
                    
                    <p><a href="?ctl=usuari&act=login">Iniciar Sesión</a></p>
                     <select name="rol">
                      <option value="2">Dietista</option>
                      <option value="1">Entrenador</option>
                     
                    </select>
                    <div class="col-md-offset-3 col-xs-offset-2">
                        <button name="Submit" type="submit" class="btn btn-info">  Registrarse    <image class="btn-icon" src="view/images/registre.png"/></button>
                    </div>
                </form>
            </div>
        </div>
    </div>