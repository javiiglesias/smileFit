<?php
ob_start();
$titlePage = "Registrarse";
//$UsuarisDA0 = new UsuarisDAO();
$Usuarios = new usuario();
$usuario = null;
$password = null;
require_once 'view/header.php';
if (isset($_REQUEST['Submit'])) {
    if (isset($_REQUEST['nuevo_Trabajador'])) {
        //$usuari = $_REQUEST['nou_usuari'];
        $usuario = htmlentities(addslashes($_REQUEST['nuevo_Trabajador']));
    }
    if (isset($_REQUEST['pass']) && isset($_REQUEST['pass2'])) {
       if($Usuarios->compPass($_REQUEST['pass'],$_REQUEST['pass2'])){
         $password = htmlentities(addslashes($_REQUEST['pass']));
      
            if ($usuario != null && $password != null) {
                $rol=$_REQUEST['rol'];
        //        $UsuarisDA0->registrarUsuari($usuari, $clau);
                $Usuarios->registrarUsuario($usuario, $password,$rol);
                $idUser=$Usuarios->getIDUser($usuario);
                require_once 'view/header.php';
                //$mensaje = "Te has registrado correctamente, Puedes iniciar Session";
                require_once 'view/seguir-registro.php';
                require_once 'view/footer.php';
            } else {
                $mensaje = "No se ha podido realizar el Registro! ";
        //      require_once 'view/error.php';
                require_once 'view/alta-trabajador.php';
                    }
    }else{
        $error="el password no coincide";
        require_once"view/alta-trabajador.php";
   
    }
    } else {
        $error="te falta un password";
        require_once"view/alta-trabajador.php";    
        }
} else {
    require_once 'view/registro.php';
}
ob_end_flush();
?>