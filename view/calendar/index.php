<?php
//Include the event calendar functions file
include_once('functions.php'); ?>
    <div class="w100">
      <?php
         require_once 'view/menu.php';
      ?>
      <div class="container">
    <!-- Display event calendar -->
    <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
    </div>
