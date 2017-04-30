<?php
ob_start();
$titlePage = "Registrar-se";
//$UsuarisDA0 = new UsuarisDAO();
$Usuaris = new usuari();
$usuari = null;
$clau = null;
require_once 'view/header.php';
if (isset($_REQUEST['Submit'])) {
    if (isset($_REQUEST['nou_usuari'])) {
        //$usuari = $_REQUEST['nou_usuari'];
        $usuari = htmlentities(addslashes($_REQUEST['nou_usuari']));
    }
    if (isset($_REQUEST['pass'])) {
//        $clau = $_REQUEST['pass'];
        $clau = htmlentities(addslashes($_REQUEST['pass']));
        $clau = password_hash($clau, PASSWORD_DEFAULT);
    }
    if ($usuari != null && $clau != null) {
//        $UsuarisDA0->registrarUsuari($usuari, $clau);
        $Usuaris->registrarUsuari($usuari, $clau);
        require_once 'view/header.php';
        $missatge = "T'has registrat Correctament! Ja pots iniciar Sessió";
        require_once 'view/confirmacion.php';
        require_once 'view/footer.php';
    } else {
        $missatge = "No s'ha pogut realitzar el registre! ";
        require_once 'view/error.php';
//        require_once 'view/registro.php';
    }
} else {
    require_once 'view/registro.php';
}
ob_end_flush();
?>