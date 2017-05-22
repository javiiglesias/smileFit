<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li class="sidebar-brand">
            <a href="#">
                Brand
            </a>
        </li>
        <li>
            <a href="?ctl=inicio">Home</a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mis opciones <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li class="dropdown-header"></li>
<<<<<<< HEAD
                            
                <li><a href="?ctl=trabajador&act=MostrarDatos&param=<?php echo $user?>">Visualizar Mis Datos</a></li>
=======
                <li><a href="?ctl=trabajador&act=MostrarDatos">Visualizar Mis Datos</a></li>
>>>>>>> Marcos
                <li><a href="?ctl=trabajador&act=MostrarMisClientes">Visualizar Mis Clientes</a></li>
                <li><a href="?ctl=trabajador&act=mostrarSolicitudes">Mostrar Solicitudes Pendientes</a></li>
                <li><a href="?ctl=trabajador&act=mostrarSolicitudesAsignadas">Mostrar Solicitudes En Curso</a></li>
                <li><a href="?ctl=trabajador&act=mostrarAgenda">Visualizar Mi Agenda</a></li>
            </ul>
        </li>
    </ul>
</nav>    <!-- Sidebar -->

<div id="page-content-wrapper">
    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
    </button>