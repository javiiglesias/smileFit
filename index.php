<<<<<<< HEAD
<<<<<<< refs/remotes/origin/Alba
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<?
header("Location:view/home.php");
?>
</body>
</html>
=======
=======
>>>>>>> master
<?php

require_once("controller/function_AutoLoad.php");
//require_once('model/business/class_usuari.php');
//require_once('model/business/class_obra.php');
session_start();

$ctl = "inici";

if (isset($_REQUEST['ctl'])) {
    $ctl = $_REQUEST['ctl'];
    $act = null;
    if (isset($_REQUEST['act'])) {
        $act = $_REQUEST['act'];
    }
}

switch ($ctl) {
    case"usuari":
        switch ($act) {
            case "login":
                include "controller/login_ctl.php";
                break;
            case "registre":
                include "controller/registreusuari_ctl.php";
                break;
            case"sortir";
                include "controller/logout.php";
                break;
        }
        break;

//    case "agencia":
//        switch ($act){
//            case "detall":
//                include "controller/Agencia_ctl.php";
//                break;
//        }
//
//
//
//    case "obra":
//        switch ($act) {
//            case "afegir":
//                include "controller/afegirObra_ctl.php";
//                break;
//            case "cercar":
//                include "controller/cercarObra_ctl.php";
//                break;
//            case "modificar":
//                include "controller/modificarObra_ctl.php";
//                break;
//            case "detalls":
//                include "controller/detallObra_ctl.php";
//                break;
//            case "eliminar":
//                include "controller/eliminarObra_ctl.php";
//                break;
//        }
//        break;
//
//    case "director":
//        switch ($act) {
//            case "afegir":
//                include "controller/afegirDirector_ctl.php";
//                break;
//            case "cercar":
//                include "controller/cercarDirector_ctl.php";
//                break;
//            case "modificar":
//                include "controller/modificarDirector_ctl.php";
//                break;
//            case "eliminar":
//                include "controller/eliminarDirector_ctl.php";
//                break;
//            case "cercar2":
//                include "view/cercarDirector.php";
//                break;
//            case "detall":
//                include "controller/detallDirector_ctl.php";
//                break;
//        }
//        break;
//
//    case "actor":
//        switch ($act) {
//            case "afegir":
//                include "controller/afegirActor_ctl.php";
//                break;
//            case "cercar":
//                include "controller/cercarActor_ctl.php";
//                break;
//            case "modificar":
//                include "controller/modificarActor_ctl.php";
//                break;
//            case "eliminar":
//                include "controller/eliminarActor_ctl.php";
//                break;
//        }
//        break;
//
//    case"tipusActor":
//        switch ($act) {
//            case "afegir":
//                include "controller/afegirTipusActor_ctl.php";
//                break;
//        }
//        break;
//
//    case"tipusObra":
//        switch ($act) {
//            case "mostrar":
//                include "controller/tipusObra_ctl.php";
//                break;
//            case "afegir":
//                include "controller/afegirTipusObra_ctl.php";
//                break;
//            case "modificar":
//                include "controller/modificarTipusObra_ctl.php";
//                break;
//            case "eliminar":
//                include "controller/eliminarTipusObra_ctl.php";
//                break;
//        }
//        break;


    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>
<<<<<<< HEAD
>>>>>>> Añadido el login-Parte Inicial
=======
>>>>>>> master
