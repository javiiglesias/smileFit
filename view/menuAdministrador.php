<div id="wrapper">
    <div class="overlay"></div>

    <?include("navigationAdmin.php");?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1>Bienvenido <?echo $user;?></h1>
                  
                </div>
                <div class="col-xs-12 col-md-6">
                <h1>info trabajadores</h1>
          <?php require_once('partials/trabajadores.php');?>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h1>Aqui debe ir el calendario ( una vez tengamos el de eventos)</h1>
                    Por loq ue se hará un require_once del documento que pondremos en el partials
                    recuerda en el partials no poner container, se pondrá en aquella vista en la que 
                    se incluya, si no tendremos problemas
                    Para incluirlo ojo con el footer, si el ctl que lo crea contiene el footer
                    Los demas no si no re repite
                    
                    -------Apartir de aqui cuando los ubas quitalo solo es para ti----------
                    Te he añadido al lado los links de cada cosa aunque este en el menu lakteral pero como no lo ves en el 
                    windows...pos eso.
                    
                    Tanto desde esta vista, que esta en partials/trabajadores.php como en la vista mostrardatosTrabajador.php
                    Que se encuentra en view directamente.
                    Deben llevar a una vista que esta creada donde se mostrará el contendio de un unico trabajador.
                    Tal i como se ven los demas, que es con forma de targeta sabes? pero en vez de gestionar, debe aparecer, "borrar"
                    "modificar" y el boton ocultado como antes " guardar datos" estos datos modificados, sustituiran "update" el usuario.
                    Por lo que debes seguir usando el id del trabajador, no lo pierdas, como si quieres crearte una sesion
                    Finalmente Se haya eliminado o modificado, deberá aparecer el mensage de "confirmacion".
                    
                    Queda por lo tanto sobre trabajador, que Funcione. Las vistas ya estan y los controladores tambien.
                    Lo que faltará editarlos para que funcione correctamente.
                    
                    PD: si en tu base de datos pones que los trabajadores tienen como foto a.jpg veras que queda xulo ajjaja al emnos a mi parecer
                    pero al menos tendras una foto de la otra forma no
                 
                    
                </div>
            </div>
        </div>
    </div>

    <!-- /#page-content-wrapper -->
