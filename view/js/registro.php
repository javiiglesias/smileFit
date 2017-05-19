<html>
<head>
    <title><?php echo $titlePage ?></title>
    <script src="view/js/validaRegistroUsuario.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />
<!--    <style type="text/css">-->
<!--        .errorMsg {-->
<!--            color: red;-->
<!--            display: none;-->
<!--        }-->
<!--    </style>-->
</head>
<body class="registro">
<div class="container-fluid">
    <div class="container">
        <div class="col-xs-8 col-sm-8  col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-5">
        </div>
        <div class="col-xs-11 col-md-4 col-xs-offset-1 col-md-offset-4 ">
            <div class="container-login">
                <form id="form" class="registro-form" action="?ctl=usuario&act=registro" method="post">
                    <img src="view/images/original3.png" class="img-responsive">
                    <h1 class="text-center transparent-heading">Registrarse</h1>
                    <small class="col-md-offset-1">Por favor,rellenar todos los campos. </small>
                    <div class="form-group space-top">
                        <label>Nombre de Usuario:</label>
                        <input type="text" id="nuevo_usuario" name="nuevo_usuario" class="form-control">
                        <span id='nuevo_usuario_error' class=errorMsg >Introduce un nombre de usuario valido (letras y numeros)</span>
                    </div>
                    <div class="form-group">
                        <label>Introduce una  Contraseña:</label>
                        <input type="password" id="pass" name="pass" class="form-control">
                        <span id='pass_error' class=errorMsg >Introduce una contraseña valida (4-15) caracteres</span>
                    </div>
                    <p><a href="?ctl=usuario&act=login">Iniciar Sesión</a></p>
                    <div class="col-md-offset-3 col-xs-offset-2">
                        <input type="submit" name="Submit" class="btn btn-info" value="Registrarse"> </input>
                    </div>
                </form>
            </div>
        </div>
    </div>