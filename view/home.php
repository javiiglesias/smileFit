<?php
require('header.php');
?>

<div class="w100">
  <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="images/original.png" />
    </li>
    <li>
      <img src="images/original.png" />
    </li>
    <li>
      <img src="images/original.png" />
    </li>
    <li>
      <img src="images/original.png" />
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
