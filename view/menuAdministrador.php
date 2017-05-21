<div id="wrapper">
    <div class="overlay"></div>

    <?php include("partials/navigationAdmin.php");?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1>Bienvenido <?echo $user;?></h1>
                  
                </div>
                <div class="col-xs-12 col-md-6">
                <h2 class="text-center">info trabajadores</h2>

          <?php require_once('partials/trabajadores.php'); ?>

                </div>
                <div class="col-xs-12 col-md-6">
            <h2 class="text-center"> info Clientes</h2>
          <?php require_once('partials/clientes.php'); ?>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- /#page-content-wrapper -->
