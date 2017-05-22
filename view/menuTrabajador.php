<div id="wrapper">
    <div class="overlay"></div>

    <?php require_once("partials/navigationTrabajador.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">

            </div>
            <div class="col-xs-12 col-md-6">
                <h1>Info Trabajador</h1>
               
                <h1>Solicitudes Pendientes.</h1>
                <?php require_once 'view/partials/solicitudesPendientes.php'; ?>
            </div>
            <div class="col-xs-12 col-md-6 mB15">
                <h1>Solicitudes Asignadas.</h1>
                <?php require_once 'view/partials/solicitudesAsignadas.php'; ?>
            </div>
             <div class="col-xs-12 col-md-offset-3 col-xs-offset-0 col-md-6 mT20 text-center">
    
               
            </div>
        </div>
    </div>
</div>