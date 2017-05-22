<?php
ob_start();
require_once("controller/function_AutoLoad.php");

$titlePage = " Trabaja con nosotros ";

require_once 'view/header.php';
require_once 'view/trabaja-con-nosotros.php';
require_once 'view/footer.php';
ob_end_flush();
?>