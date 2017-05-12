

<!-- <select name="rol">
<option value="2">Dietista</option>
<option value="1">Entrenador</option>

</select> -->

<?require_once("controller/solicitudes_ctl.php");?>
<?php foreach ($solicitud as $solicitudes): ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0">
                
        <div class="col-xs-12 col-md-8 col-sm-6 col-lg-8pB35 h226 mB15">
            <a href="?ctl=trabajador&act=mostrarSolicitudes&param=<?php echo $solicitudes->getId();?>" >
                <h3> <?echo $solicitudes->getDescripcion();?></h3><br>
            </a>
            <span class="lite fz13"><? echo $solicitudes->getFecha();?></span><br>
<!--             <a href="?ctl=noticias&act=detalle&param=<?php echo $solicitudes->getId();?>">
                <span class="pT20 bold colorRed dInlineB fz13">Leer más</span>
            </a> -->
        </div>
    </div>
    <!--echo $noticias->getContenido();-->          

    <?endforeach ?>

