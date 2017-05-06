<div class="container-fluid">
    <div class="container">
        <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
            <img src="view/images/Logo.png" class="img-responsive img-Logologin">
        </div>
        <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
            <div class="container-login">
                <form action="?ctl=usuario&act=registro" method="post">
                    <h1 class="text-center">Registrarse</h1>
                    <small class="col-md-offset-1">Por favor,rellenar todos los campos. </small>
                    <div class="form-group space-top">
                        <label>Nombre de Usuario:</label>
                        <input type="text" name="nuevo_usuario" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Introduce una  Contraseña:</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <p><a href="?ctl=usuari&act=login">Iniciar Sesión</a></p>
                    <div class="col-md-offset-3 col-xs-offset-2">
                        <button name="Submit" class="btn btn-info">  Registrarse    <image class="btn-icon" src="view/images/registre.png"/></button>
                    </div>
                </form>
            </div>
        </div>
    </div>