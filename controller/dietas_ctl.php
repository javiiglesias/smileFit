<?php

ob_start();

$titlePage = "Dietas";

require_once 'view/header.php';

require_once 'view/dietas.php';

require_once 'view/footer.php';

ob_end_flush();
?>