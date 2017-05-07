<?php
//if (isset($_SESSION['usuario'])=="administrador") {
//    header("Location: ?ctl=menu&act=admin ");
//    exit();
//
////    http_redirect("");
//}else {
    ?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="col-xs-2">
                    <a class="" href="?ctl=inicio"><img class="img-responsive" src="view/images/original3.png"/></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <?php if ($titlePage == "Inicio") { ?>
                            <li class="active"><a href="?ctl=inicio">Inicio</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=inicio">Inicio</a></li>
                        <?php } ?>

                        <?php if ($titlePage == "Dietas") { ?>
                            <li class="active"><a href="?ctl=agencia&act=detall">Dietas</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=agencia&act=detall">Dietas</a></li>
                        <?php } ?>


                        <?php if ($titlePage == "Entrenamientos") { ?>
                            <li class="active"><a href="?ctl=entrenamientos">Entrenamientos</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=entrenamientos">Entrenamientos</a></li>
                        <?php } ?>
                        <?php if ($titlePage == "Noticias") { ?>
                            <li class="active"><a href="?ctl=noticias">Noticias</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=noticias">Noticias</a></li>
                        <?php } ?>
                        <?php if ($titlePage == "Trabaja con nosotros") { ?>
                            <li class="active"><a href="?ctl=trabaja-con-nosotros">Trabaja con nosotros</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=trabaja-con-nosotros">Trabaja con nosotros</a></li>
                        <?php } ?>
                        <?php if ($titlePage == "Contacto") { ?>
                            <li class="active"><a href="?ctl=contacto">Contacto</a></li>
                        <?php } else { ?>
                            <li><a href="?ctl=contacto">Contacto</a></li>
                        <?php } ?>
                    </ul>
                    <?php if ($titlePage != "Iniciar Sesion" && $titlePage != "Registrarse") { ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <?php
                            if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                            if (isset($_SESSION['usuario'])) {
                                $user = $_SESSION['usuario'];
                            }
                            ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"><span
                                    class="fa fa-user"></span> <?php echo $user; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php } else { ?>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span> Visitante
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?php } ?>
                                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) { ?>
                                       <?php if (isset($_SESSION['test']) && $_SESSION['test'] =="administrador") { ?>
                                        <li><a href="?ctl=menu&act=admin"> Ir al Panel de Administracion</a></li>
                                        <li><a href="?ctl=usuario&act=salir">Cerrar Sesión</a></li>
                                           <?php }elseif(isset($_SESSION['test']) && $_SESSION['test'] =="cliente"){ ?>
                                            <li><a href="?ctl=menu&act=cliente"> Ir a mi Panel</a></li>
                                           <li><a href="?ctl=usuario&act=salir">Cerrar Sesión</a></li>
                                         <?php }elseif(isset($_SESSION['test']) && $_SESSION['test'] =="Trabajador") { ?>
                                            <li><a href="?ctl=menu&act=cliente"> Ir al Panel del Trabajador</a></li>
                                           <li><a href="?ctl=usuario&act=salir">Cerrar Sesión</a></li>
                                           <?php } ?>
                                    <?php } else { ?>
                                        <li><a href="?ctl=usuario&act=login">Iniciar Sesión</a></li>
                                        <li><a href="?ctl=usuario&act=registro">Registrarse</a></li>
                                    <?php } ?>
                                </ul>
                                </li>
                            </ul>
                            <?php } ?>
                </div>

            </div>
        </div>
    </nav>


    <?php
//}
//?>