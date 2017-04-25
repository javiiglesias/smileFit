<?php
require('header.php');
?>

<div class="w100">
  <div class="flexslider">
  <ul class="slides">
    <li>
      <img src="original.png" />
    </li>
    <li>
      <img src="original.png" />
    </li>
    <li>
      <img src="original.png" />
    </li>
    <li>
      <img src="original.png" />
    </li>
  </ul>
</div>

<script type="text/javascript">
	$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>

<?php
require('footer.php');
?>
