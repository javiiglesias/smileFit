<div class="container bgPrin">
    <div class="bgprinop col-lg-12 col-md-12 col-sm-12 col-xs-12 mT50nXS borderGris pL0" xmlns="http://www.w3.org/1999/html">

        <div class="col-lg-12">
        
            <div class="col-lg-12 text-center">
                <img src="view/images/dietaPesada.jpg" class="img-responsive marginAutoInlineBlock" alt="ejercicio 1"/><br>
            </div>
            <div class="col-lg-12 fz20">

                <h1 class="text-center">Odiosas dietas</h1>
                <span>Muchas de las dietas que puedes encontrar por internet son completas restricciones sobre que
                puedes y que no puedes comer, sin saber que a lo mejor a ti als espinacas no te gustan o eres intolerante a
                algun alimento, en <strong>Smile Fit</strong> hacemos un reconocimiento de cada persona, analizamos
                Cuales son los motivos por el que hacer una dieta, y le aconsejamos que alimentos debería comer menos
                o como seguir comiendo lo mismo, sin tan solo engordar un gramo</span>
                <h2 class="text-center">¿Quieres saber como?</h2>
                <span> No dudes en ponerte en contacto con nosotros, envianos una solicitud y en menos de 24h nos pondremos en contacto
                    contigo y nuestr@s dietistas te aconsejarán de la manera mas profesional a la vez que personal.<br>
                Recuerda ante todo somos personas!</span>
              
    </div>
    <div class="text-center col-xs-12 bgdada">
    <h2 class="text-blanc">Solicita una Dieta</h2>
    </div>
  <?php if(isset($_SESSION['test'])){?>
    <?php include('view/partials/solicitar.php'); ?>
    <?}else{?>
    <div class="text-center col-xs-12 bgBlanc">
    <a href="ctl=usuario&act=registro" class="btn btn-success mR15">No soy cliente, quiero registrarme</a>
    <a href="ctl=usuario&act=login" class="btn btn-success">Ya soy cliente! Inicia Sesion</a>
    </div>
    <?}?>
      
</div>
    </div>
</div>