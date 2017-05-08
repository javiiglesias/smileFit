<?php
?>
<div class="tophome">
  
</div>

<div class="clear mb614"></div>

<div class="w100">
<div class="container mB90 text-center">
    <h2>Últimas noticias</h2>


<?php foreach ($noticia as $noticias ): ?>
  <?var_dump($noticias)?>

  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mB15xs ">
    <div class="recuadro">
     <img class="img-responsive" src="view/images/<? echo $noticias->getImagen();?>" />
          <h3 class="bold colorGrey pT20 dInlineB fz18 h60"><?echo $noticias->getTitulo();?></h3>
      <span class="lite pT20 dInlineB h70"><?echo $noticias->getDescripcion();?></span>
      <span class="pT20 pB20xs dInlineB normal fz14">leer mas</span>
    </div>
  </div>

<?php endforeach ?>

  </div>

  </div>
