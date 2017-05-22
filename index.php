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
    if(isset($_REQUEST['param'])){
        $parm=($_REQUEST['param']);
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
            case "enviarMail":
                include "controller/contactoEnviarMail_ctl.php";
                break;
        }
        break;
        

    case "contacto":
        include "controller/contacto_ctl.php";
    break;

   case "menu":
      switch ($act) {
            case "admin":
              include "controller/menuAdmin_ctl.php";
              break;
           case "cliente":
               include "controller/menuCliente_ctl.php";
               break;
            case "trabajador":
               include "controller/menuTrabajador_ctl.php";
               break;
           case"salir";
               include "controller/logout_ctl.php";
              break;
       }
        break;

    case "noticias":
        switch ($act) {
            case "detalle":
                include "controller/noticiasDetalle_ctl.php";
                break;
            default:
                include"controller/noticias_ctl.php";
                break;
            }
    break;
    case "admin":
        switch ($act) {
            case "altaTrabajador":
                include "controller/altaTrabajador_ctl.php";
                break;
            case "registro-trabajador":
                include "controller/registro-trabajador_ctl.php";
                break;
            case "completa-registro":    
                include "controller/completa-registro_ctl.php";
                break;
            case "ModificarDatosTrabajador":
                include "controller/ModificarDatosTrabajador_ctl.php";
                break;
            case "visualizarTrabajadores":
                include "controller/mostrarDatosTrabajadores_ctl.php";
                break;
            case "MostrarDatos":
                include "controller/gestionaTrabajador_ctl.php";
                break;
            case "EliminarTrabajador":
                include "controller/eliminarTrabajador_ctl.php";
                break;
            case "mostrarClientes":
                include "controller/mostrarClientes_ctl.php";
                break;
              case "ModificarDatos":
                include "controller/ModificarDatosCliente_ctl.php";
                break;
        }
        break;

    case "cliente":
        switch ($act) {
            case "MostrarDatos":
                include "controller/MostrarDatosCliente_ctl.php";
                break;

            case "mostrarAgenda":
                include "controller/mostrarAgenda_ctl.php";
                break;

            case "ModificarDatos":
                include "controller/ModificarDatosCliente_ctl.php";
                break;            
            case "EliminarCliente":
                include "controller/EliminarCliente_ctl.php";
                break;
            case "AñadirDatos":
                include "controller/AñadirDatosCliente_ctl.php";
                break;
            case "AñadirFichaMedica":
                include "controller/AñadirFichaMedica_ctl.php";
                break;
            case "MostrarFichaMedica":
                include "controller/MostrarFichaMedica_ctl.php";
                break;
            case "ModificarDatosFicha":
                include "controller/ModificarDatosFicha_ctl.php";
                break;

            case "historial":
                include "controller/Historial_ctl.php";
            case "Entrenamiento":
                include "controller/entrenamientos_ctl.php";
                break;
            case "solicitar":
                include "controller/solicitar_ctl.php";
                break;
            case "mostrarSolicitudes":
                include "controller/solicitudes_ctl.php";
                break;
            case "enviarLineaSolicitud":
                include "controller/enviarLineaSolicitud_ctl.php";
                break;
            case "mostrarSolicitudesAsignadas":
                include "controller/mostrarSolicitudesAsignadas_ctl.php";
                break;
        }
            break;

    case "trabajador":
        switch ($act) {
            case "MostrarDatos":
                include "controller/gestionaTrabajador_ctl.php";
                break;
            case "mostrarAgenda":
                include "controller/mostrarAgenda_ctl.php";
                break;
            case "mostrarSolicitudes":
                include "controller/solicitudes_ctl.php";
                break;
            case "mostrarLineasSolicitud":
                include "controller/lineasSolicitud_ctl.php";
                break;
            case "enviarLineaSolicitud":
                include "controller/enviarLineaSolicitud_ctl.php";
                break;
            case "asignarSolicitud":
                include "controller/altaSolicitud_ctl.php";
                break;
            case "altaSolicitudForm":
                include "controller/altaSolicitudForm_ctl.php";
                break;
            case "mostrarSolicitudesAsignadas":
                include "controller/mostrarSolicitudesAsignadas_ctl.php";
                break;
            case "mostrarEntrenamiento":
                include "controller/mostrarEntrenamiento_ctl.php";
                break;
            case "altaEjercicio":
                include "controller/altaEjercicio_ctl.php";
                break;  
            case "MostrarMisClientes":
                include "controller/mostrarMisClientes_ctl.php";
                break;
                case "enviarDieta":
                include "controller/enviarDieta_ctl.php";
                break;
        }
        break;

    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>
