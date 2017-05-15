<?php

$titlePage = "Crear un nuevo evento";

require_once 'view/header.php';
require_once("controller/function_AutoLoad.php");
require_once 'view/partials/header-altaEvento.php';
require_once 'view/altaEvento.php';

require_once 'view/footer.php';
ob_end_flush();
?>