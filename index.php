<?php

require_once("controller/function_AutoLoad.php");
//require_once('model/business/class_usuario.php');
//require_once('model/business/class_obra.php');
session_start();

$ctl = "inicio";

if (isset($_REQUEST['ctl'])) {
    $ctl = $_REQUEST['ctl'];
    $act = null;
    if (isset($_REQUEST['act'])) {
        $act = $_REQUEST['act'];
    }
}

switch ($ctl) {
    case"usuario":
        switch ($act) {
            case "login":
                include "controller/login_ctl.php";
                break;
            case "registro":
                include "controller/registrarUser_ctl.php";
                break;
            case"salir";
                include "controller/logout_ctl.php";
                break;
            case "panel":
                include "controller/panel_ctl.php";
                break;
        }
        break;
        

    case "contacto":
        include "controller/contacto_ctl.php";
    break;
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
