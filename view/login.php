<?php
$guardarUsuario = "";
if (isset($_COOKIE['usuario'])) {
    $guardarUsuario = $_COOKIE['usuario'];
}
?>
<html>
<body class="login">
<div class="container-fluid">
    <div class="container">
        <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-4">

        </div>
        <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
            <div class="container-login">
                <form action="?ctl=login" method="POST" class="login-form">
                    <img src="view/images/original2.png" class="imagen-login">
                    <h1 class="text-center transparent-heading">Iniciar Sesión</h1>
                    <div class="form-group">
                        <label><strong>Usuario:</strong></label>
                        <input type="text" name="usuario" value="<?php echo $guardarUsuario; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><strong>Contraseña:</strong></label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <p>Recordar usuario <input type="checkbox" name="recordarUsuario"><p>
                    <p><a href="?ctl=usuari&act=registre">Registrarse como  usuario</a></p>
                    <div class="col-xs-10 col-md-9 col-md-offset-3 col-xs-offset-2">
                        <button name="Submit" class="btn btn-warning"> Entrar <image class="btn-icon imagen-button-login"  src="view/images/login.ico"/> </button>
                    </div>
                    <form>
            </div>
        </div>
    </div>