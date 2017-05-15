
    <div class="container">
        <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
            <img src="view/images/Logo.png" class="img-responsive img-Logologin">
        </div>
        <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
            <div class="container-login">
                <form action="?ctl=admin&act=registro-trabajador" method="post">
                    
                    <span> <? if(isset($error)){echo $error;}?></span>
                    <div class="form-group space-top">
                        <label>Nombre Trabajador:</label>
                        <input type="text" name="nuevo_Trabajador" class="form-control">
                    </div>
                 
                    <div class="form-group">
                        <label>Contraseña:</label>
                        <input minlength="4"  type="password" name="pass"  class="form-control">
                    </div>
                       <div class="form-group">
                        <label>Introduce nuevamente una  Contraseña:</label>
                        <input minlength="4" type="password" name="pass2" class="form-control">
                    </div>
                    
                    <p><a href="?ctl=usuari&act=login">Iniciar Sesión</a></p>
                     <select name="rol">
                      <option value="2">Dietista</option>
                      <option value="1">Entrenador</option>
                     
                    </select>
                    <div class="col-md-offset-3 col-xs-offset-2">
                        <button name="Submit" class="btn btn-info">  Registrarse    <image class="btn-icon" src="view/images/registre.png"/></button>
                    </div>
                </form>
            </div>
        </div>
    </div>