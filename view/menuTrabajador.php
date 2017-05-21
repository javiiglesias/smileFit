<?php
//include session control
//include("../controller/checkSession.php");
include("C:/xampp/htdocs/M12/smileFit/controller/checkSession.php");
//include("../view/printInvalidMessage.php");

if (checkSession()) {
?>

<div id="wrapper">
    <div class="overlay"></div>

    <?php require_once("partials/navigationTrabajador.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">

            </div>
            <div class="col-xs-12 col-md-6">
                <h1>Info Trabajador</h1>
                <!--                <ul>
                                 <li><a href="?ctl=trabajador&act=VerDatosClientes">Ver Ficha Personal Clientes</a></li> 
                                <li><a href="?ctl=trabajador&act=MostrarDatos">Visualizar Mis Datos</a></li>
                                <li><a href="?ctl=trabajador&act=mostrarSolicitudes">Mostrar Solicitudes Pendientes</a></li>
                                <li><a href="?ctl=trabajador&act=mostrarSolicitudesAsignadas">Mostrar Solicitudes En Curso</a></li>
                                <li><a href="?ctl=trabajador&act=mostrarAgenda">Visualizar Mi Agenda</a></li>
                                </ul>-->
                <?php require_once('partials/contentNews.php'); ?>
            </div>
            <div class="col-xs-12 col-md-6 mB15">
                <h1>Solicitudes Asignadas.</h1>
                <?php require_once 'view/partials/solicitudesAsignadas.php'; ?>
            </div>
             <div class="col-xs-12 col-md-offset-3 col-xs-offset-0 col-md-6 mT20 text-center">
    
                <h1>Solicitudes Pendientes.</h1>
                <?php require_once 'view/partials/solicitudesPendientes.php'; ?>
            </div>
        </div>
    </div>
</div>
    <?php
} else{
    header("Location: index.php");
}
?>