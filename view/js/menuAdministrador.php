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
<!--                     <h1>Aqui debe ir el calendario ( una vez tengamos el de eventos)</h1>
                    
                    Tanto desde esta vista, que esta en partials/trabajadores.php como en la vista mostrardatosTrabajador.php
                    Que se encuentra en view directamente.
                    Deben llevar a una vista que esta creada donde se mostrará el contendio de un unico trabajador.
                    Tal i como se ven los demas, que es con forma de targeta, pero en vez de gestionar, debe aparecer, "borrar" "modificar" y el boton ocultado como antes " guardar datos" estos datos modificados, sustituiran "update" el usuario. Por lo que debes seguir usando el id del trabajador, como si quieres crearte una sesion. Se haya eliminado o modificado, deberá aparecer el mensage de "confirmacion".
                    
                    Queda por lo tanto sobre trabajador, que Funcione. Las vistas ya estan y los controladores tambien.
                    Lo que faltará editarlos para que funcione correctamente. -->
<h2 class="text-center"> info Clientes</h2>
          <?php require_once('partials/clientes.php'); ?>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- /#page-content-wrapper -->
