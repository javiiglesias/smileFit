<?php

ob_start();
$user=  $_SESSION["usuario"] ;
$titlePage = "Dashboard de ".$user;

require_once 'view/header.php';
require_once 'view/menuTrabajador.php';
require_once 'view/footer.php';

ob_end_flush();
?>