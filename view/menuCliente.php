<div id="wrapper">
    <div class="overlay"></div>

    <?php require_once("partials/navigationCliente.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">

            </div>
            <div class="col-xs-12 col-md-6">
                <h1>Info Cliente</h1>
                <ul>
                <li><a href="?ctl=cliente&act=AñadirDatos">Añadir Ficha Personal</a></li>
                <li><a href="?ctl=cliente&act=MostrarDatos">Visualizar Mis Datos</a></li>
                <li><a href="?ctl=cliente&act=mostrarSolicitudes">Mostrar Solicitudes Pendientes</a></li>
                <li><a href="?ctl=cliente&act=mostrarSolicitudesAsignadas">Mostrar Solicitudes En Curso</a></li>
                <li><a href="?ctl=cliente&act=mostrarAgenda">Visualizar Mi Agenda</a></li>
                </ul>
                <?php require_once('partials/contentNews.php');?>
            </div>
            <div class="col-xs-12 col-md-6">
                <h1>Aqui podras ver información varia.</h1>

                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
            </div>
        </div>
    </div>
</div>