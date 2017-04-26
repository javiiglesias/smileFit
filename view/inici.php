<?php
?>

<div class="w100">
  <div class="flexslider">
  <ul class="slides">
    <li>
      <img class="img-responsive" src="view/images/ejercicio1.jpg" />
    </li>
    <li>
      <img class="img-responsive" src="view/images/ejercicio2.jpg" />
    </li>
    <li>
      <img class="img-responsive" src="view/images/ejercicio3.jpg" />
    </li>
    <li>
      <img class="img-responsive" src="view/images/ejercicio4.jpg" />
    </li>
     <li>
      <img class="img-responsive" src="view/images/fitnes.jpg" />
    </li>
  </ul>
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

<?php
?>
