<?php
ob_start();
$titlePage = "Registrarse";
//$UsuarisDA0 = new UsuarisDAO();
$Usuarios = new usuario();
$usuario = null;
$password = null;
require_once 'view/header.php';
if (isset($_REQUEST['Submit'])) {
    if (isset($_REQUEST['nuevo_usuario'])) {
        //$usuari = $_REQUEST['nou_usuari'];
        $usuario = htmlentities(addslashes($_REQUEST['nuevo_usuario']));
    }
    if (isset($_REQUEST['pass'])) {
//        $clau = $_REQUEST['pass'];
        $password = htmlentities(addslashes($_REQUEST['pass']));
//        $password = password_hash($password, PASSWORD_DEFAULT);
    }
    if ($usuario != null && $password != null) {
//        $UsuarisDA0->registrarUsuari($usuari, $clau);
        $Usuarios->registrarUsuario($usuario, $password);
        require_once 'view/header.php';
        $mensaje = "Te has registrado correctamente, Puedes iniciar Session";
        require_once 'view/confirmacion.php';
        require_once 'view/footer.php';
    } else {
        $mensaje = "No se ha podido realizar el Registro! ";
//        require_once 'view/error.php';
        require_once 'view/registro.php';
    }
} else {
    require_once 'view/registro.php';
}
ob_end_flush();
?>