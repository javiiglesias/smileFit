<?php

ob_start();

$titlePage = "Entrenamientos";

require_once 'view/header.php';

require_once 'view/entrenamientos.php';

require_once 'view/footer.php';

ob_end_flush();
?>