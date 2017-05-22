<<<<<<< HEAD
<?php
//Include the event calendar functions file
include_once('functions.php'); ?>
    <div class="w100">
      <?php
         require_once 'view/menu.php';
      ?>
      <div class="container">
              <a href="javascript:history.back(1)" class="btn btn-default fixed">Volver Atrás</a>
    <!-- Display event calendar -->
    <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
    </div>
=======
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
>>>>>>> Marcos
