<?php
ob_start();
require_once("controller/function_AutoLoad.php");
//require_once ("../model/Business/class_usuario.php");
$titlePage = "Iniciar Sesion";
$Usuarios = new usuario();
if (isset($_REQUEST['recordarUsuario'])) {
    setcookie("usuario", $_REQUEST['usuario'], time() + 3600, "/");
} else {
    setcookie("usuario", "", time() - 3600, "/");
}
require_once 'view/header.php';
if (isset($_REQUEST['Submit'])) {
//    $usuari = $_REQUEST['usuari'];
//    $clau = $_REQUEST['pass'];
    $usuario = htmlentities(addslashes($_REQUEST['usuario']));
    $password = htmlentities(addslashes($_REQUEST['pass']));
    $usuarioValidado = $Usuarios->validateUser($usuario, $password);
    if ($usuarioValidado == true) {
        $rol= $Usuarios->getUser($usuario,$password);
        $_SESSION["login"] = true;
        $_SESSION["usuario"] = $usuario;
        $_SESSION["test"]=$rol;
        header("Location: index.php");
    } else {
        $_SESSION["usuario"] = "";
        session_unset("usuario");
        session_destroy();
        require_once 'view/header.php';
        $mensaje = "Error Login";
        require_once 'view/error.php';
        require_once 'view/footer.php';
    }
} else {
    require_once 'view/login.php';
}
ob_end_flush();
?>