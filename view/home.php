<?php
require('header.php');
?>

<div class="w100">
  <div class="flexslider">
  <ul class="slides">
    <li>
      <img class="img-responsive" src="images/ejercicio1.jpg" />
    </li>
    <li>
      <img class="img-responsive" src="images/ejercicio2.jpg" />
    </li>
    <li>
      <img class="img-responsive" src="images/ejercicio3.jpg" />
    </li>
    <li>
      <img class="img-responsive" src="images/ejercicio4.jpg" />
    </li>
     <li>
      <img class="img-responsive" src="images/fitness.jpg" />
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
require('footer.php');
?>
