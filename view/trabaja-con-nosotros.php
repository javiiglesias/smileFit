<script src="view/js/validaContacto.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="view/css/validaciones.css" media="screen" />


<div class="container " id="main">
    <div class="col-xs-12 text-center">
        <span class="fz20">
            ¿Quieres formar parte de nuestro equipo SmileFit*?</span><br><span>(*¡No olvides adjuntar tu CV haciendo click en “Seleccionar archivo”!)
</span>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mT30 mR0 mB35" id="contactar">
<!--        http://html.conclase.net/articulos/mailto INFORMACION PARA ENVIAR EL FORMULARIO-->
        <form  name="form" id="form" method="post" action="mailto:bruyah@hotmail.com" enctype="text/plain">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" >
                    <input type="text" class="form-control lite required" id="nom" name="nom" placeholder="Nombre y Apellidos">
                    <span id='nom_error' class=errorMsg >Introduce un nombre valido, solo letras</span>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" >
                    <input type="text" class="form-control lite required" id="telefon" name="telefon" placeholder="Teléfono">
                    <span id='telefon_error' class=errorMsg >Introduce un numero de telefono valido</span>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" >
                    <input type="text" class="form-control lite email required" id="email" name="email" placeholder="Email de contacto">
                    <span id='email_error' class=errorMsg>Introduce un email valido</span>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" >
                    <input type="text" class="form-control lite required" id="poblacio" name="poblacio" placeholder="Población">
                    <span id='poblacio_error' class=errorMsg>Introduce un nombre de poblacion valida</span>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mT10">
                    <textarea class="form-control lite required" rows="5" name="observacions" id="observacions" placeholder="Por que quieres trabajar con nosotros?"></textarea>
                </div>
            </div>
            <input type="file" id="file" name="file" size="40" class="btn fontBold bcolor font14 mayus bold">
            <span id='file_error' class=errorMsg>Tienes que seleccionar un archivo</span>
            <div class="col-lg-2  col-md-2 col-sm-12 col-xs-12 mT10 mB70 mB15 text-center pL0sm">
                <input type="submit" name="enviar" id="enviar" value="enviar" class="btn fontBold bcolor font14 mayus bold">
            </div>

</div>
<div class="clear"></div>
</div>