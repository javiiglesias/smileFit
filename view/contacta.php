<?php
?>

<div class="w100 h100 pRelative bgGris mB30" id="scrollTo">
  <div class=" col-xs-12 text-center centerVert">
     <span class="fZ24 lite">Servicio de Atención al cliente</span>
  </div>
</div>


<div class="container" id="main">

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mT5" >
       <img  class="img-responsive bR5" src="http://www.ascensors-serra.com/templates/web/img/form.png"/>
   </div>

    <div class="col-xs-8">
          <span class="fz14 lite">Si necessitas assessoramiento sobre nuestras dietas o entrenamientos, rellena el siguiente formulario y contactaremos lo antes posible contigo.</span>
    </div>

 
  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mT30  mB35" id="contactar">  
    <form class="mRL0" name="form" id="form" method="POST" action="#">
      
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" id="ala">
        <input type="text" class="form-control lite required" id="nom" name="nom" placeholder="Nom i cognoms">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" id="ala">
        <input type="text" class="form-control lite required" id="telefon" name="telefon" placeholder="Telèfon">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" id="ala">
        <input type="text" class="form-control lite required email" id="email" name="email" placeholder="Email de contacte">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10 mB10" id="ala">
        <input type="text" class="form-control lite required" id="poblacio" name="poblacio" placeholder="Població">
      </div>

      <div class="col-lg-12 ">
        <textarea class="form-control lite required" rows="5" name="observacions" id="observacions" placeholder="Observacions"></textarea>
      </div>
        <div class="col-xs-12  marginTB20">
        <script src='https://www.google.com/recaptcha/api.js'></script>
         <span class="error"></span>
        <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
        <div class="g-recaptcha clear" data-sitekey="6LduLxoUAAAAACtoyiKIKLnnNtGamNf-urxBDn7k"></div>
      </div>
      <div class="col-lg-2  col-md-2 col-sm-12 col-xs-12 mT10 mB70 mB15 text-center pR0">
        <input type="submit" name="enviar" id="enviar" value="enviar"  class="btn bold bcolor w100 font14 mayus h42">
      </div>


          </form>
   
  </div>

  <?php
?>