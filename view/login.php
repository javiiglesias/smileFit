<?php
$guardarUsuario = "";
if (isset($_COOKIE['usuario'])) {
    $guardarUsuario = $_COOKIE['usuario'];
}
?>
<html>

        <script src="view/js/validaLoginUsuario.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />

<body class="login">
<div class="container-fluid">
    <div class="container">
        <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-4">
        </div>
        <div class="col-xs-10 col-md-6 col-xs-offset-1 col-md-offset-3 ">
            <div class="container-login">
                <form id="form" action="?ctl=login" method="post" class="login-form">
                    <img src="view/images/original3.png" class="img-responsive">
                    <h1 class="text-center transparent-heading">Iniciar Sesión</h1>
                    <div class="form-group">
                        <label><strong>Usuario:</strong></label>
                        <input type="text" id="usuario" name="usuario" value="<?php echo $guardarUsuario; ?>" class="form-control">
                        <span id='usuario_error' class=errorMsg >Introduce un nombre de usuario valido (letras y numeros)</span>
                    </div>
                    <div class="form-group">
                        <label><strong>Contraseña:</strong></label>
                        <input type="password" id="pass" name="pass" class="form-control">
                        <span id='pass_error' class=errorMsg >Introduce una contraseña valida (4-15) caracteres</span>
                    </div>
                    <p>Recordar usuario <input type="checkbox" name="recordarUsuario"><p>
                    <p><a href="?ctl=usuari&act=registre">Registrarse como  usuario</a></p>
                    <div class="text-center">
                        <input type="submit" name="Submit" class="btn btn-info" value="Enviar"> <image class="btn-icon imagen-button-login"  src="view/images/login.ico"/> </input>
                    </div>
                </form>
            </div>
        </div>
    </div>