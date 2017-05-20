<?require_once("controller/mostrarSolicitudesAsignadas_ctl.php"); ?>
<div class="container">
    
  <?php  if($usuarioRol == "Trabajador"){
       
        foreach ($gen as $entrenamientos): 
            $idC = $entrenamientos->getIdCliente();
            $idT = $entrenamientos->getIdTrabajador();
            $idS = $entrenamientos->getIdSolicitud();

            $nombreT = $trabajadores->getNombreApellidos($idT);
            $nombreC = $clientes->getNombreApellidos($idC);
            $nombreS = $solicitudes->GetSolicitudDescripcion($idS); ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT35 borderGris pL0">
     
            <div class="col-xs-12 col-md-9 col-sm-6 col-lg-8pB35 h175 mB15">
                <h2><?php echo $entrenamientos->getDescripcion(); ?></h2>
                <span class="lite fz13"><b>Fecha Inicio: </b> <?php echo $entrenamientos->getFechaInicio(); ?></span>
                <span class="lite fz13"><b>&nbsp; Fecha Fin: </b><?php echo $entrenamientos->getFechaFin(); ?></span><br>
                <span class="lite fz13"><b>Cliente: </b><?php echo $nombreC; ?></span>
                <span class="lite fz13"><b>&nbsp; Trabajador: </b><?php echo $nombreT; ?></span><br>
                <span class="lite fz13"><b>Solicitud: </b><?php echo $nombreS; ?></span>
            </div>
        </div>
        <?php endforeach;
     
    }else{ 

        foreach ($entrenamiento as $entrenamientos): 
            $idC = $entrenamientos->getIdCliente();
            $idT = $entrenamientos->getIdTrabajador();
            $idS = $entrenamientos->getIdSolicitud();

            $nombreT = $trabajadores->getNombreApellidos($idT);
            $nombreC = $clientes->getNombreApellidos($idC);
            $nombreS = $solicitudes->GetSolicitudDescripcion($idS); ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mT20 borderGris pL0">
                
                <div class="col-xs-6 col-md-5 col-sm-3 col-lg-8pB35 h175 mB15">
                    <h2><?php echo $entrenamientos->getDescripcion();?></h2>
                    <span class="lite fz13"><b>Fecha Inicio: </b> <?php echo $entrenamientos->getFechaInicio();?></span>
                    <span class="lite fz13"><b>&nbsp; Fecha Fin: </b><?php echo $entrenamientos->getFechaFin();?></span><br>
                    <span class="lite fz13"><b>Cliente: </b><?php echo $nombreC; ?></span>
                    <span class="lite fz13"><b>&nbsp; Trabajador: </b><?php echo $nombreT; ?></span><br>
                    <span class="lite fz13"><b>Solicitud: </b><?php echo $nombreS; ?></span>
                </div>
            </div>
        <?php endforeach;

        foreach ($dieta as $dietas): 
            $idC = $dietas->getIdCliente();
            $idT = $dietas->getIdTrabajador();
            $idS = $dietas->getIdSolicitud();

            $nombreT = $trabajadores->getNombreApellidos($idT);
            $nombreC = $clientes->getNombreApellidos($idC);
            $nombreS = $solicitudes->GetSolicitudDescripcion($idS); ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mT20 borderGris pL0">
                
                <div class="col-xs-6 col-md-5 col-sm-3 col-lg-8pB35 h175 mB15">
                    <h2><?php echo $dietas->getDescripcion();?></h2>
                    <span class="lite fz13"><b>Fecha Inicio: </b> <?php echo $dietas->getFechaInicio();?></span>
                    <span class="lite fz13"><b>&nbsp; Fecha Fin: </b><?php echo $dietas->getFechaFin();?></span><br>
                    <span class="lite fz13"><b>Cliente: </b><?php echo $nombreC; ?></span>
                    <span class="lite fz13"><b>&nbsp; Trabajador: </b><?php echo $nombreT; ?></span><br>
                    <span class="lite fz13"><b>Solicitud: </b><?php echo $nombreS; ?></span>
                </div>
            </div>
        <?php endforeach;
    }?>
</div>
