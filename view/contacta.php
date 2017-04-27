<?php
?>

<div class="w100 h100 pRelative bgGris mB30" id="scrollTo">
  <div class=" col-xs-12 text-center centerVert">
     <span class="fZ24 lite">Servicio de Atención al cliente</span>
  </div>
</div>


<div class="container" id="main">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mT5" >
       <img  class="img-responsive bR5" src="images/gymdiet.jpg"/>
   </div>

    <div class="col-xs-8">
          <span class="fz14 lite">Si necesitas asesoramiento sobre nuestras dietas o entrenamientos, rellena el siguiente formulario y contactaremos lo antes posible contigo.</span>
    </div>

 
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mT30  mB35" id="contactar">  
    <form class="mRL0" name="form" id="form" method="POST" action="#">
      
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" id="ala">
        <input type="text" class="form-control lite required" id="nom" name="nommbre" placeholder="Nombre y apellidos">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" id="ala">
        <input type="text" class="form-control lite required" id="telefon" name="telefono" placeholder="Teléfono">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" id="ala">
        <input type="text" class="form-control lite required email" id="email" name="email" placeholder="Email de contacto">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10 mB10" id="ala">
        <input type="text" class="form-control lite required" id="poblacio" name="poblacion" placeholder="Población">
      </div>

      <div class="col-lg-12 ">
        <textarea class="form-control lite required" rows="5" name="observaciones" id="observaciones" placeholder="Observaciones"></textarea>
        </div>
      <div class="col-lg-2  col-md-2 col-sm-12 col-xs-12 mT10 mB70 mB15 text-center pR0">
        <input type="submit" name="enviar" id="enviar" value="enviar"  class="btn bold bcolor w100 font14 mayus h42">
      </div>
    </form>   
  </div>
</div>

  <?php
?>