<?php
?>
<div class="w100 topflexslide">
  <div class="flexslider">
  <ul class="slides">
    <li class="bgSlide1">
     <!-- <img class="img-responsive" src="view/images/ejercicio1.jpg" />-->
    </li>
    <li class="bgSlide2">
      <!--<img class="img-responsive" src="view/images/ejercicio2.jpg" />-->
    </li>
    <li class="bgSlide3">
      <!--<img class="img-responsive" src="view/images/ejercicio3.jpg" />-->
    </li>
    <li class="bgSlide4">
      <!--<img class="img-responsive" src="view/images/ejercicio4.jpg" />-->
    </li>
     <li class="bgSlide5">
     <!-- <img class="img-responsive" src="view/images/fitness.jpg" />-->
    </li>
  </ul>
</div>
</div>
<script type="text/javascript">
 $( document ).ready(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      slideshowSpeed: 6000,
      animationSpeed: 1000
    });
  });

</script>