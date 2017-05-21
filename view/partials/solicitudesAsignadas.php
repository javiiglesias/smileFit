<?php require_once("controller/mostrarSolicitudesAsignadas_ctl.php"); ?>  
<?php if(isset($usuarioRol) && isset($gen)){
  if($usuarioRol == "Trabajador"){
       
        foreach ($gen as $entrenamientos): 
            $idC = $entrenamientos->getIdCliente();
            $idT = $entrenamientos->getIdTrabajador();
            $idS = $entrenamientos->getIdSolicitud();

            $nombreT = $trabajadores->getNombreApellidos($idT);
            $nombreC = $clientes->getNombreApellidos($idC);
            $nombreS = $solicitudes->GetSolicitudDescripcion($idS); ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT35 borderGris pL0">
     
            <div class="col-xs-12 col-md-9 col-sm-6 col-lg-8 pB35 h175 mB15" style="height: 240px;">
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
?>
<div class="col-xs-12 col-sm-6" >
<h2>Soy un listado de Entrenamientos</h2>
<?php        foreach ($entrenamiento as $entrenamientos): 
            $idC = $entrenamientos->getIdCliente();
            $idT = $entrenamientos->getIdTrabajador();
            $idS = $entrenamientos->getIdSolicitud();

            $nombreT = $trabajadores->getNombreApellidos($idT);
            $nombreC = $clientes->getNombreApellidos($idC);
            $nombreS = $solicitudes->GetSolicitudDescripcion($idS); ?>
            <div class=" col-xs-12 mT20 borderGris hAuto pL0">
                
                <div class="col-xs-6 col-md-5 col-sm-3 col-lg-12 pB35  mB15">
                    <h2><?php echo $entrenamientos->getDescripcion();?></h2>
                    <span class="lite fz13"><b>Fecha Inicio: </b> <?php echo $entrenamientos->getFechaInicio();?></span>
                    <span class="lite fz13"><b>&nbsp; Fecha Fin: </b><?php echo $entrenamientos->getFechaFin();?></span><br>
                    <span class="lite fz13"><b>Cliente: </b><?php echo $nombreC; ?></span>
                    <span class="lite fz13"><b>&nbsp; Trabajador: </b><?php echo $nombreT; ?></span><br>
                    <span class="lite fz13"><b>Solicitud: </b><?php echo $nombreS; ?></span>
                </div>
            </div>
        <?php endforeach; ?>
</div>
<div class="col-xs-12 col-sm-6 borderGris">
<h2>Soy un listado de dietasssss</h2>
<?php        foreach ($dieta as $dietas): 
            $idC = $dietas->getIdCliente();
            $idT = $dietas->getIdTrabajador();
            $idS = $dietas->getIdSolicitud();

            $nombreT = $trabajadores->getNombreApellidos($idT);
            $nombreC = $clientes->getNombreApellidos($idC);
            $nombreS = $solicitudes->GetSolicitudDescripcion($idS); ?>
            <div class=" col-xs-12 mT20 borderGris hAuto pL0">
                
                <div class="col-xs-6 col-md-5 col-sm-3 col-lg-12 pB35  mB15">
                    <h2><?php echo $dietas->getDescripcion();?></h2>
                    <span class="lite fz13"><b>Fecha Inicio: </b> <?php echo $dietas->getFechaInicio();?></span>
                    <span class="lite fz13"><b>&nbsp; Fecha Fin: </b><?php echo $dietas->getFechaFin();?></span><br>
                    <span class="lite fz13"><b>Cliente: </b><?php echo $nombreC; ?></span>
                    <span class="lite fz13"><b>&nbsp; Trabajador: </b><?php echo $nombreT; ?></span><br>
                    <span class="lite fz13"><b>Solicitud: </b><?php echo $nombreS; ?></span>
                </div>
            </div>
        <?php endforeach;?>
    </div>

    <?php }
    
}else{
    echo $msg;
}?>