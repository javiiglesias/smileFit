<?php
?>
  <div class="container-fluid fonsContactar">
  <div class="container">
    <h1 class="lH140 fz34 txtBlanc lite">Contactar</h1>
  </div>
</div>
 <div class="container " id="main">




    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mT30 mR0 mB35" id="contactar">  
    <form  name="form" id="form" method="POST" action="#">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" >
        <input type="text" class="form-control lite required" id="nom" name="nom" placeholder="Nombre y Apellidos">
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" >
        <input type="text" class="form-control lite required" id="telefon" name="telefon" placeholder="Teléfono">
      </div>

    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" >
          <input type="text" class="form-control lite email required" id="email" name="email" placeholder="Email de contacto">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mT10" >
          <input type="text" class="form-control lite required" id="poblacio" name="poblacio" placeholder="Población">
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12 mT10">
          <textarea class="form-control lite required" rows="5" name="observacions" id="observacions" placeholder="Observaciones"></textarea>
        </div>  
      </div>
      

      <div class="col-xs-12 pL0sm marginTB20">
        <script src='https://www.google.com/recaptcha/api.js'></script>
         <span class="error"></span>
        <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
        <div class="g-recaptcha clear" data-sitekey="6LduLxoUAAAAACtoyiKIKLnnNtGamNf-urxBDn7k"></div>
      </div>

      <div class="col-lg-2  col-md-2 col-sm-12 col-xs-12 mT10 mB70 mB15 text-center pL0sm">
        <input type="submit" name="enviar" id="enviar" value="enviar" class="btn fontBold bcolor font14 mayus bold">
      </div>
    </form>
  </div> 

    <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-6 col-xs-12 mT45nxs  mB60 pR0-sm mapa ">

      <iframe width="293" height="299"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11934.19064313842!2d2.2830082!3d41.6006675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x927832ae0f620566!2sInstitut+Carles+Vallbona!5e0!3m2!1ses!2ses!4v1493304852974" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>

</div>
<div class="clear"></div>
<script type="text/javascript">
  $('#form').validate();
</script> 
 


  <?php
?>